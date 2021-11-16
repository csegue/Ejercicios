<?php
require "BD_Servidor.php";

    class Conexion{
        protected $conexion_db;
        //....................................................................................
        public function Conexion(){
            $this->conexion_db= new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
            if($this->conexion_db->connect_errno){
                echo "Fallo en conexion". $this->conexion_db->connect_error;
                return;
            }else{
                //echo "Conexion correcta"."<br>";
                return;
            }
            $this->conexion_db->set_charset(DB_CHARSET);
            $mysqli->close();
        }
    }



    // $miObjeto1= new Conexion();   echo $miObjeto1->Conexion();
 ?>

<!-- Muy Práctico :

     mysqli::$affected_rows     — Obtiene el número de filas afectadas en la última operación MySQL
     mysqli::autocommit         — Activa o desactiva las modificaciones de la base de datos autoconsignadas
     mysqli::begin_transaction  — Inicia una transacción
     mysqli::change_user        — Cambia el usuario de la conexión de bases de datos especificada
     mysqli::character_set_name — Devuelve el juego de caracteres predeterminado para la conexión a la base de datos
     mysqli::close              — Cierra una conexión previamente abierta a una base de datos
     mysqli::commit             — Consigna la transacción actual
     mysqli::$connect_errno     — Devuelve el código de error de la última llamada
     mysqli::$connect_error     — Devuelve una cadena con la descripción del último error de conexión
     mysqli::__construct        — Abre una nueva conexión al servidor de MySQL
     mysqli::debug              — Realiza operaciones de depuración
     mysqli::dump_debug_info    — Volcado de información de depuración en el registro
     mysqli::$errno             — Devuelve el código del error de la última función llamada
     mysqli::$error_list        — Devuelve una lista de errores desde el último comando ejecutado
     mysqli::$error             — Devuelve una cadena que describe el último error
     mysqli::$field_count       — Devuelve el número de columnas para la consulta más reciente
     mysqli::get_charset        — Devuelve un objeto que contiene el conjunto de caracteres
     mysqli::get_client_info    — Obtiene información de la biblioteca cliente de MySQL
     mysqli_get_client_version  — Devuelve la versión clientes de MySQL como valor de tipo integer
     mysqli::get_connection_stats — Devuelve estadísticas sobre la conexión del cliente
     mysqli::$host_info         — Devuelve una cadena que representa el tipo de conexión usada
     mysqli::$protocol_version  — Devuelve la versión del protocolo MySQL utilizada
     mysqli::$server_info       — Devuelve la versión del servidor MySQL
     mysqli::$server_version    — Devuelve la versión del servidor MySQL como un valor entero
     mysqli::get_warnings       — Obtiene el resultado de SHOW WARNINGS
     mysqli::$info              — Obtiene la información de la última consulta ejecutada
     mysqli::init               — Inicializa y devuelve un recurso para utilizarlo con mysqli_real_connect()
     mysqli::$insert_id         — Devuelve el id autogenerado que se utilizó en la última consulta
     mysqli::kill               — Pide al servidor poner fin a un hilo de MySQL
     mysqli::more_results       — Comprueba si hay más resultados de una multi consulta
     mysqli::multi_query        — Realiza una consulta a la base de datos
     mysqli::next_result        — Prepara el siguiente resultado de multi_query
     mysqli::options            — Establecer opciones
     mysqli::ping               — Comprueba la conexión al servidor, o trata de reconectar si se perdió la conexión
     mysqli::poll               — Almacena en caché conexiones
     mysqli::prepare            — Prepara una sentencia SQL para su ejecución
     mysqli::query              — Realiza una consulta a la base de datos
     mysqli::real_connect       — Abre una conexión a un servidor mysql
     mysqli::real_escape_string — Escapa los caracteres especiales de una cadena para usarla en una sentencia SQL, tomando en cuenta el conjunto     de caracteres actual de la conexión
     mysqli::real_query         — Ejecuta una consulta SQL
     mysqli::reap_async_query   — Obtener el resultado de una consulta asincrónica
     mysqli::refresh            — Refresca
     mysqli::release_savepoint  — Elimina el punto salvado con nombre del conjunto de puntos salvados de la transacción actual
     mysqli::rollback           — Revierte la transacción actual
     mysqli::savepoint          — Define el nombre de un punto de salvaguarda de la transacción
     mysqli::select_db          — Selecciona la base de datos por defecto para realizar las consultas
     mysqli::set_charset        — Establece el conjunto de caracteres predeterminado del cliente
     mysqli::$sqlstate          — Devuelve el error SQLSTATE de la operación de MySQL previa
     mysqli::ssl_set            — Usada para establece conexiones seguras usando SSL
     mysqli::stat               — Obtiene el estado actual del sistema
     mysqli::stmt_init          — Inicializa una sentencia y devuelve un objeto para usarlo con mysqli_stmt_prepare
     mysqli::store_result       — Transfiere un conjunto de resultados de la última consulta
     mysqli::$thread_id         — Deveulve el ID del hilo de la conexión actual
     mysqli::thread_safe        — Devuelve si la seguridad a nivel de hilos está dada o no
     mysqli::use_result         — Inicia la recuperación de un conjunto de resultados
     mysqli::$warning_count     — Devuelve el número de mensajes de advertencia de la última consulta para un enlace dado


     mysqli_stmt — La clase mysqli_stmt
     mysqli_stmt::$affected_rows — Devuelve el número total de filas cambiadas, borradas, o insertadas por la última sentencia ejecutada
     mysqli_stmt::attr_get — Se utiliza para obtener el valor actual de un atributo de la sentencia
     mysqli_stmt::attr_set — Se utiliza para modificar el comportamiento de una sentencia preparada
     mysqli_stmt::bind_param — Agrega variables a una sentencia preparada como parámetros
     mysqli_stmt::bind_result — Vincula variables a una sentencia preparada para el almacenamiento de resultados
     mysqli_stmt::close — Cierra una sentencia preparada
     mysqli_stmt::__construct — Construye un nuevo objeto mysqli_stmt
     mysqli_stmt::data_seek — Busca una fila arbitraria en un conjunto de resultados de una sentencia
     mysqli_stmt::$errno — Devuelve el código de error de la llamada de la sentencia más reciente
     mysqli_stmt::$error_list — Devuelve una lista de errores de la última sentencia ejecutada
     mysqli_stmt::$error — Devuelve una descripción en forma de string del último error de una sentencia
     mysqli_stmt::execute — Ejecuta una consulta preparada
     mysqli_stmt::fetch — Obtiene los resultados de una sentencia preparadas en las variables vinculadas
     mysqli_stmt::$field_count — Devuelve el número de campos de la sentencia dada
     mysqli_stmt::free_result — Libera la memoria de los resultados almacenados del gestor de sentencia dado
     mysqli_stmt::get_result — Obtiene un conjunto de resultados de una sentencia preparada
     mysqli_stmt::get_warnings — Obtener los resultados de SHOW WARNINGS
     mysqli_stmt::$insert_id — Obtener el ID generado en la operación INSERT anterior
     mysqli_stmt::more_results — Comprobar si existen más resultados de una consulta de consultas múltiples
     mysqli_stmt::next_result — Lee el siguiente resultado de una consulta múltiple
     mysqli_stmt::$num_rows — Devuelve el número de filas de un conjunto de resultados de una sentencia
     mysqli_stmt::$param_count — Devuelve el número de parámetros de la sentencia dada
     mysqli_stmt::prepare — Preparar una sentencia SQL para su ejecución
     mysqli_stmt::reset — Reinicia una sentencia preparada
     mysqli_stmt::result_metadata — Devuelve los metadatos del conjunto de resultados de una sentencia preparada
     mysqli_stmt::send_long_data — Enviar datos en bloques
     mysqli_stmt::$sqlstate — Devuelve el error SQLSTATE de la operación de sentencia previa
     mysqli_stmt::store_result — Transfiere un conjunto de resultados desde una sentencia preparada
     mysqli_result — La clase mysqli_result
     mysqli_result::$current_field — Obtener posición del campo actual de un puntero a un resultado
     mysqli_result::data_seek — Ajustar el puntero de resultado a una fila arbitraria del resultado
     mysqli_result::fetch_all — Obtener todas las filas en un array asociativo, numérico, o en ambos
     mysqli_result::fetch_array — Obtiene una fila de resultados como un array asociativo, numérico, o ambos
     mysqli_result::fetch_assoc — Obtener una fila de resultado como un array asociativo
     mysqli_result::fetch_field_direct — Obtener los metadatos de un único campo
     mysqli_result::fetch_field — Retorna el próximo campo del resultset
     mysqli_result::fetch_fields — Devuelve un array de objetos que representan los campos de un conjunto de resultados
     mysqli_result::fetch_object — Devuelve la fila actual de un conjunto de resultados como un objeto
     mysqli_result::fetch_row — Obtener una fila de resultados como un array enumerado
     mysqli_result::$field_count — Obtiene el número de campos de un resultado
     mysqli_result::field_seek — Establecer el puntero del resultado al índice del campo especificado
     mysqli_result::free — Libera la memoria asociada a un resultado
     mysqli_result::$lengths — Retorna los largos de las columnas de la fila actual en el resultset
     mysqli_result::$num_rows — Obtiene el número de filas de un resultado
     mysqli_driver — La clase mysqli_driver
     mysqli_driver::embedded_server_end — Detener el servidor incrustado
     mysqli_driver::embedded_server_start — Inicializa e inicia el servidor embebido
     mysqli_driver::$report_mode — Habilita o desabilita las funciones internas de notificación
     mysqli_warning — La clase mysqli_warning
     mysqli_warning::next — El propósito next
     mysqli_sql_exception — La clase mysqli_sql_exception
     Alias y Funciones de MySQLi obsoletos
     mysqli_connect — Alias de mysqli::__construct
     mysqli_escape_string — Alias de mysqli_real_escape_string
     mysqli_execute — Alias para mysqli_stmt_execute
     mysqli_get_client_stats — Returns client per-process statistics
     mysqli_get_links_stats — Devolver información sobre enlaces abiertos y almacenados en caché
     mysqli_report — Alias de mysqli_driver->report_mode
     mysqli::set_opt — Alias de mysqli_options

    -->
