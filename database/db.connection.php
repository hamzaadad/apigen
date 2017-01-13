<?php

class SPDO
{
  /**
   * Instance de la classe PDO
   *
   * @var PDO
   * @access private
   */
  private $PDOInstance = null;

   /**
   * Instance de la classe SPDO
   *
   * @var SPDO
   * @access private
   * @static
   */
  private static $instance = null;

  /**
   * Constante: nom d'utilisateur de la bdd
   *
   * @var string
   */
  const DEFAULT_SQL_USER = 'root';

  /**
   * Constante: hôte de la bdd
   *
   * @var string
   */
  const DEFAULT_SQL_HOST = 'localhost';

  /**
   * Constante: hôte de la bdd
   *
   * @var string
   */
  const DEFAULT_SQL_PASS = '';

  /**
   * Constante: nom de la bdd
   *
   * @var string
   */
  const DEFAULT_SQL_DTB = 'caisse';
  const SCHEMA_SQL_DTB = 'information_schema';

  /**
   * Constructeur
   *
   * @param void
   * @return void
   * @see PDO::__construct()
   * @access private
   */
  private function __construct($schema)
  {
    $this->PDOInstance = new PDO('mysql:dbname='.(($schema) ? self::DEFAULT_SQL_DTB  : self::DEFAULT_SQL_DTB).';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);
  }



   /**
    * Crée et retourne l'objet SPDO
    *
    * @access public
    * @static
    * @param void
    * @return SPDO $instance
    */
  public static function getInstance($schema)
  {
    if(is_null(self::$instance))
    {
      self::$instance = new SPDO($schema);
    }
    return self::$instance;
  }

  /**
   * Exécute une requête SQL avec PDO
   *
   * @param string $query La requête SQL
   * @return PDOStatement Retourne l'objet PDOStatement
   */
  public function query($query)
  {
    return $this->PDOInstance->query($query);
  }
}
 ?>
