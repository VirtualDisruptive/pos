<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;
use App\Models\CajasModel;
use App\Models\RolesModel;

class Usuarios extends BaseController
{
    protected $usuarios, $cajas, $roles;
    protected $reglas, $reglasLogin, $reglascambia;

    public function __construct()
    {
        $this->usuarios = new usuariosModel();
        $this->cajas = new CajasModel();
        $this->roles = new RolesModel();
        helper(['form']);

        $this->reglas = [
            'usuario' => [
                'rules' => 'required|is_unique[usuarios.usuario]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio',
                    'is_unique' => 'El campo {field} debe ser unico'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio'
                ]
            ],
            'repassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio',
                    'matches' => 'Las contraseña no coinciden'
                ]
            ],
            'nombre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio'
                ]
            ],
            'id_caja' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio',
                ]
            ],
            'id_rol' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio',
                ]
            ]

            
        
        ];

        $this->reglasLogin = [
            'usuario' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio'
                ]
            ],
        ];
        
        $this-> reglascambia = [
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio'
                ]
            ],
            'repassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio',
                    'matches' => 'Las contraseña no coinciden'
                ]
            ],
        ];
       
    }

    public function index($activo = 1)
    {
        $usuarios = $this->usuarios->where('activo', $activo)->findAll();

        $data = ['titulo' => 'Usuarios', 'datos' => $usuarios];

        echo view('header');
        echo view('usuarios/usuarios', $data);
        echo view('footer');
    }

    public function eliminados($activo = 0)
    {
        $usuarios = $this->usuarios->where('activo', $activo)->findAll();

        $data = ['titulo' => 'usuarios eliminadas', 'datos' => $usuarios];

        echo view('header');
        echo view('usuarios/eliminados', $data);
        echo view('footer');
    }

    public function nuevo()
    {
        $cajas = $this->cajas->where('activo', 1)->findAll();
        $roles = $this->roles->where('activo', 1)->findAll();
        $data = ['titulo' => 'agregar usuario','cajas'=> $cajas, 'roles'=>$roles];
        echo view('header');
        echo view('/usuarios/nuevo', $data);
        echo view('footer');
    }

    public function insertar()
    {
        if ($this->request->getMethod() === "post" && $this->validate($this->reglas)) {
            $hash = password_hash($this->request->getPost('password'),PASSWORD_DEFAULT);
            $this->usuarios->save([
                'usuario' => $this->request->getPost('usuario'), 
                'password' => $hash, 
                'nombre' => $this->request->getPost('nombre'), 
                'id_caja' => $this->request->getPost('id_caja'), 
                'id_rol' => $this->request->getPost('id_rol'), 
                'activo' => 1, 
                ]);


            return redirect()->to(base_url() . '/usuarios');
        } else {
            $cajas = $this->cajas->where('activo', 1)->findAll();
            $roles = $this->roles->where('activo', 1)->findAll();
            $data = ['titulo' => 'agregar unidad','cajas'=> $cajas,'roles'=>$roles, 'validation' => $this->validator];
            echo view('header');
            echo view('/usuarios/nuevo', $data);
            echo view('footer');
        }
    }


    public function editar($id, $valid = null)
    {
        $unidad = $this->usuarios->where('id', $id)->first();
        if ($valid != null) {

            $data = ['titulo' => 'Editar unidad', 'datos' => $unidad, 'validation' => $valid];
        } else {
            $data = ['titulo' => 'Editar unidad', 'datos' => $unidad];
        }
        echo view('header');
        echo view('usuarios/editar', $data);
        echo view('footer');
    }

    public function actualizar()
    {
        if ($this->request->getMethod() === "post" && $this->validate($this->reglas)) {
            $this->usuarios->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'), 'nombre_corto' => $this->request->getPost('nombre_corto')]);
            return redirect()->to(base_url() . '/usuarios');
        } else {
            return $this->editar($this->request->getPost('id'), $this->validatior);
        }
    }

    public function eliminar($id)
    {

        $this->usuarios->update($id, ['activo' => 0]);
        return redirect()->to(base_url() . '/usuarios');
    }


    public function reingresar($id)
    {

        $this->usuarios->update($id, ['activo' => 1]);
        return redirect()->to(base_url() . '/usuarios');
    }

    public function login(){
        echo view('usuarios/login');
    }

    public function valida(){
        if ($this->request->getMethod() === "post" && $this->validate($this->reglasLogin)) {
            $usuario=$this->request->getPost('usuario');
            $password=$this->request->getPost('password');
            $datoUsuario = $this->usuarios->where('usuario', $usuario)->first();

            if($datoUsuario !=null){
               if(password_verify($password, $datoUsuario['password'])){
                $datosSesion = [
                    'id_usuario'=>$datoUsuario['id'],
                    'nombre'=>$datoUsuario['nombre'],
                    'id_caja'=>$datoUsuario['id_caja'],
                    'id_rol'=>$datoUsuario['id_rol']
                ];
                $session =session();
                $session->set($datosSesion);
                return redirect()->to(base_url().'/configuracion');

               } else {
                $data['error']="Las contraseña no coinciden";
                echo view('usuarios/login', $data);
               }
            }else{
                $data['error']="El usuario no existe";
                echo view('usuarios/login', $data);
            }
         } else{
            $data = ['validation'=> $this-> validator];
            echo view ('usuarios/login', $data);
         }

    }

    public function logout ()
    {
        $session=session();
        $session->destroy(); 
        return redirect()->to(base_url());
    }

    public function cambia_password()
    {
        $session = session();
        $usuario = $this->usuarios->where('id', $session->id_usuario)->first();
        $data = ['titulo' => 'Cambiar contraseña','usuario'=> $usuario];
        echo view('header');
        echo view('/usuarios/cambia_password', $data);
        echo view('footer');
    }

    public function actualizar_password()
    {
        if ($this->request->getMethod() === "post" && $this->validate($this->reglascambia)) {
            $session= session();
            $idUsuario =$session->id_usuario;
            $hash = password_hash($this->request->getPost('password'),PASSWORD_DEFAULT);
            $this->usuarios->update($idUsuario,['password'=>$hash]);


            $usuario = $this->usuarios->where('id', $session->id_usuario)->first();
            $data = ['titulo' => 'Cambiar contraseña','usuario'=> $usuario,'mensaje'=>'Contraseña Actualizada'];
            echo view('header');
            echo view('/usuarios/cambia_password', $data);
            echo view('footer');
        } else {
        $session = session();
        $usuario = $this->usuarios->where('id', $session->id_usuario)->first();
        $data = ['titulo' => 'Cambiar contraseña','usuario'=> $usuario, 'validation' => $this->validator];
        echo view('header');
        echo view('/usuarios/cambia_password', $data);
        echo view('footer');
        }

    }
}
