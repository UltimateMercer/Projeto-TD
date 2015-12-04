<?php

  include_once 'Carrega.class.php';


  class Disciplinas
  {
    private $id;
    private $disciplina;
    private $curso;
    private $bd;


    function __construct()
    {
      $this->bd = new BD();
    }

    public function __destruct()
    {
       unset($this->bd);
    }

    public function __get($key)
    {
       return $this->$key;
    }

    public function __set($key, $value)
    {
       $this->$key = $value;
    }

    public function Inserir()
    {
      $sql = "INSERT INTO disciplinas (disciplina, curso)
              VALUES ('$this->disciplina', '$this->curso')";
      $return = pg_query($sql);
      return $return;
    }

    public function Listar()
    {

      $sql = "SELECT * FROM disciplinas as d, cursos as c WHERE d.curso=c.id_curso";
      $result = pg_query($sql);
      $return = null;

      while ($reg = pg_fetch_assoc($result))
      {
         $object = new Disciplinas();
         $object->id = $reg["id_disc"];
         $object->disciplina = $reg["disciplina"];
         $object->curso = $reg["nome"];

         $return[] = $object;
      }

      return $return;

    }

    public function Excluir()
    {
      $sql = "DELETE from disciplinas where id_disc=$this->id";
      $return = pg_query($sql);
      return $return;
    }

    public function Atualizar()
    {

      $return = false;
      $sql = "UPDATE disciplinas SET disciplina='$this->disciplina', curso='$this->curso' WHERE id_disc=$this->id";

      $return = pg_query($sql);

      return $return;
    }

    public function Editar($id = "")
    {
      $sql = "SELECT * FROM disciplinas as d, cursos as c WHERE d.curso=c.id_curso AND d.id_disc=$id";
      $result = pg_query($sql);
      $return = null;

      while ($reg = pg_fetch_assoc($result))
      {
         $object = new Disciplinas();
         $object->id = $reg["id_disc"];
         $object->disciplina = $reg["disciplina"];
         $object->curso = $reg["curso"];

         $return = $object;
      }

      return $return;
    }

    public function Exibir($id = "")
    {
      $sql = "SELECT * FROM disciplinas d WHERE d.id=$id";
      $result = pg_query($sql);
      $return = null;

      while ($reg = pg_fetch_assoc($result))
      {
         $object = new Disciplinas();
         $object->id = $reg["id"];
         $object->disciplina = $reg["disciplina"];
         $object->curso = $reg["curso"];

         $return = $object;
      }

      return $return;
    }

    public function disciplinaSelect($disciplina ="")
    {
       $sql = "SELECT * from disciplina Order by id_disc";
       $result = pg_query($sql);

       $ln=pg_num_rows($result);

      if ($ln==0)
      {
         echo "<option value=''>Nada Encontrado!!</option>";
      }
      else
      {
        while ($a = pg_fetch_array($result))
        {
          $this->id = $a['id_disc'];
          $this->disciplina = $a['disciplina'];

          if ($disciplina==$this->id)
          {
            print "<option selected value='{$this->id}'>{$this->disciplina}</option>";
          }
          else
          {
            print "<option value='{$this->id}'>{$this->disciplina}</option>";
          }
        }
      }
    }


}
?>
