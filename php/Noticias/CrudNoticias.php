<?php

//include 'Upload.class.php';
include_once "../../class/Carrega.class.php";


   if (isset($_POST['enviar']))
   {
      $object              = new Noticias();
      $object->autor       = $_POST['autor'];
      $object->data        = $_POST['data'];
      $object->hora        = $_POST['hora'];
      $object->titulo      = $_POST['titulo'];
      $object->linha_apoio = $_POST['linha_apoio'];
      $object->status      = $_POST['status'];
      $object->categoria   = $_POST['categoria'];
      $object->noticia     = $_POST['noticia'];
      $object->url         = $_POST['url'];
      //print_r($object);
      $object->Inserir();
      //$myUpload = new Upload($_FILES["imagem"]);
      //print_r($myUpload);


      if (!empty($_FILES["imagem"]["name"]))
      {
        $myUpload = new Upload($_FILES["imagem"]);

        $Up = $myUpload->noticiaUpload();
      }
      else
      {
        $noImage = new Noticias();

        $noImage->noImageUp();
      }

      header("Location:ViewNoticiasObj.php");
   }

   elseif (isset($_POST['excluir']))
   {
      $object     = new Noticias();
      $object->id = $_POST['id'];

      //print_r($object);
      $object->Excluir();

      header("Location:ViewNoticiasObj.php");
   }

   elseif (isset($_POST['atualizar']))
   {
      $object              = new Noticias();
      $object->id          = $_POST['id'];
      $object->autor       = $_POST['autor'];
      $object->data        = $_POST['data'];
      $object->hora        = $_POST['hora'];
      $object->titulo      = $_POST['titulo'];
      $object->linha_apoio = $_POST['linha_apoio'];
      $object->status      = $_POST['status'];
      $object->categoria   = $_POST['categoria'];
      $object->noticia     = $_POST['noticia'];
      $object->url         = $_POST['url'];

      $object->Atualizar();

      $myUpload = new Upload($_FILES["imagem"]);

      $Up = $myUpload->noticiaUploadUpdate($_POST['id']);
      header("Location:ViewNoticiasObj.php");
   }

?>
