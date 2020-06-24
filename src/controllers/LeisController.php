<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Lei;

class LeisController extends Controller {

    public  function LeisAdd(){
        $this->render('lei_add');
     }

     public function LeisAction(){

        
        if(isset($_FILES['arquivo'])){
            $nome_arquivo = ($_FILES['arquivo']['name']);
            $ext = pathinfo($nome_arquivo, PATHINFO_EXTENSION);
            $nome_arquivo = md5($_FILES['arquivo']['name'].rand(1,999).'.'.$ext);
            $novo_nome = $nome_arquivo.'.'.$ext;
            

            move_uploaded_file($_FILES['arquivo']['tmp_name'],'assets/arquivos/'.$nome_arquivo.'.'.$ext);
            
            $numero = filter_input(INPUT_POST, 'numero');
            $descricao = filter_input(INPUT_POST, 'descricao');
            $ano = filter_input(INPUT_POST, 'ano');
            $dia = filter_input(INPUT_POST, 'dia');
            $arquivo = filter_input(INPUT_POST, 'arquivo');

            if($numero){
                $data = Lei::select()->where('descricao', $descricao)->execute();

                    if(count($data) ===0){

                    // insere
                        Lei::insert([
                            
                            'numero' => $numero,
                            'descricao' => $descricao,
                            'ano' => $ano,
                            'dia' => $dia,
                            'arquivo' =>$novo_nome
                        ])->execute();
                        
                            $this->redirect('/leis');
                }else{
                    echo "deu errado ai";
                    var_dump($data);
                }
            }
        }
     }

     public function LeisEdit($args){
        $lei = Lei::select()->find($args['id']);

        
        $this->render('lei_edit', [
            'lei' =>$lei
        ]);
     }

     public function LeisEditAction($args){

            $numero = filter_input(INPUT_POST, 'numero');
            $descricao = filter_input(INPUT_POST, 'descricao');
            $ano = filter_input(INPUT_POST, 'ano');
            $dia = filter_input(INPUT_POST, 'dia');
            $arquivo = filter_input(INPUT_POST, 'arquivo');
            
           
            if($numero){
                    // insere
                        Lei::update()
                        ->set('numero', $numero)
                        ->set('descricao', $descricao)
                        ->set('ano', $ano)
                        ->set('dia', $dia)
                        ->set('arquivo', $arquivo)
                        ->where('id', $args['id'])
                        
                        ->execute();

                $this->redirect('/leis');
                
            $nome_arquivo = ($_FILES['arquivo']['name']);
            $ext = pathinfo($nome_arquivo, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['arquivo']['tmp_name'],'assets/arquivos/'.$nome_arquivo.'.'.$ext);
                }else{

                    $this->redirect('/leis/'.$args['id'].'editar');
                }
            }
        
        
    
    public function del($args){

        Lei::delete()
        ->where('id', $args['id'])
    ->execute();
        $this->redirect('/leis');
    }

        }

