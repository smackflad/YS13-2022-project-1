<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Set of functions used for cleaning up phpMyAdmin tables
 *
 * @version $Id: relation_cleanup.lib.php 11986 2008-11-24 11:05:40Z nijel $
 * @package phpMyAdmin
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/**
 *
 */
require_once './libraries/relation.lib.php';

/**
 * Cleanu column related relation stuff
 *
 * @uses PMA_getRelationsParam()
 * @uses PMA_backquote()
 * @uses PMA_sqlmysql_real_escape_string()
 * @uses PMA_query_as_cu()
 * @param string $db
 * @param string $table
 * @param string $column
 */
function PMA_relationsCleanupColumn($db, $table, $column)
{
    $cfgRelation = PMA_getRelationsParam();

    if ($cfgRelation['commwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['column_info'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\''
                    . ' AND table_name = \'' . PMA_sqlmysql_real_escape_string($table) . '\''
                    . ' AND column_name = \'' . PMA_sqlmysql_real_escape_string($column) . '\'';
        PMA_query_as_cu($remove_query);
    }

    if ($cfgRelation['displaywork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['table_info'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\''
                    . ' AND table_name = \'' . PMA_sqlmysql_real_escape_string($table) . '\''
                    . ' AND display_field = \'' . PMA_sqlmysql_real_escape_string($column) . '\'';
        PMA_query_as_cu($remove_query);
    }

    if ($cfgRelation['relwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['relation'])
                    . ' WHERE master_db  = \'' . PMA_sqlmysql_real_escape_string($db) . '\''
                    . ' AND master_table = \'' . PMA_sqlmysql_real_escape_string($table) . '\''
                    . ' AND master_field = \'' . PMA_sqlmysql_real_escape_string($column) . '\'';
        PMA_query_as_cu($remove_query);

        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['relation'])
                    . ' WHERE foreign_db  = \'' . PMA_sqlmysql_real_escape_string($db) . '\''
                    . ' AND foreign_table = \'' . PMA_sqlmysql_real_escape_string($table) . '\''
                    . ' AND foreign_field = \'' . PMA_sqlmysql_real_escape_string($column) . '\'';
        PMA_query_as_cu($remove_query);
    }
}

/**
 * Cleanup table related relation stuff
 *
 * @uses PMA_getRelationsParam()
 * @uses PMA_backquote()
 * @uses PMA_sqlmysql_real_escape_string()
 * @uses PMA_query_as_cu()
 * @param string $db
 * @param string $table
 */
function PMA_relationsCleanupTable($db, $table)
{
    $cfgRelation = PMA_getRelationsParam();

    if ($cfgRelation['commwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['column_info'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\''
                    . ' AND table_name = \'' . PMA_sqlmysql_real_escape_string($table) . '\'';
        PMA_query_as_cu($remove_query);
    }

    if ($cfgRelation['displaywork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['table_info'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\''
                    . ' AND table_name = \'' . PMA_sqlmysql_real_escape_string($table) . '\'';
        PMA_query_as_cu($remove_query);
    }

    if ($cfgRelation['pdfwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['table_coords'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\''
                    . ' AND table_name = \'' . PMA_sqlmysql_real_escape_string($table) . '\'';
        PMA_query_as_cu($remove_query);
    }

    if ($cfgRelation['designerwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['designer_coords'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\''
                    . ' AND table_name = \'' . PMA_sqlmysql_real_escape_string($table) . '\'';
        PMA_query_as_cu($remove_query);
    }

    if ($cfgRelation['relwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['relation'])
                    . ' WHERE master_db  = \'' . PMA_sqlmysql_real_escape_string($db) . '\''
                    . ' AND master_table = \'' . PMA_sqlmysql_real_escape_string($table) . '\'';
        PMA_query_as_cu($remove_query);

        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['relation'])
                    . ' WHERE foreign_db  = \'' . PMA_sqlmysql_real_escape_string($db) . '\''
                    . ' AND foreign_table = \'' . PMA_sqlmysql_real_escape_string($table) . '\'';
        PMA_query_as_cu($remove_query);
    }
}

/**
 * Cleanup database related relation stuff
 *
 * @uses PMA_getRelationsParam()
 * @uses PMA_backquote()
 * @uses PMA_sqlmysql_real_escape_string()
 * @uses PMA_query_as_cu()
 * @param string $db
 */
function PMA_relationsCleanupDatabase($db)
{
    $cfgRelation = PMA_getRelationsParam();

    if ($cfgRelation['commwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['column_info'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\'';
        PMA_query_as_cu($remove_query);
    }

    if ($cfgRelation['bookmarkwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['bookmark'])
                    . ' WHERE dbase  = \'' . PMA_sqlmysql_real_escape_string($db) . '\'';
        PMA_query_as_cu($remove_query);
    }

    if ($cfgRelation['displaywork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['table_info'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\'';
        PMA_query_as_cu($remove_query);
    }

    if ($cfgRelation['pdfwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['pdf_pages'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\'';
        PMA_query_as_cu($remove_query);

        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['table_coords'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\'';
        PMA_query_as_cu($remove_query);
    }

    if ($cfgRelation['designerwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['designer_coords'])
                    . ' WHERE db_name  = \'' . PMA_sqlmysql_real_escape_string($db) . '\'';
        PMA_query_as_cu($remove_query);
     }

    if ($cfgRelation['relwork']) {
        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['relation'])
                    . ' WHERE master_db  = \'' . PMA_sqlmysql_real_escape_string($db) . '\'';
        PMA_query_as_cu($remove_query);

        $remove_query = 'DELETE FROM ' . PMA_backquote($cfgRelation['db']) . '.' . PMA_backquote($cfgRelation['relation'])
                    . ' WHERE foreign_db  = \'' . PMA_sqlmysql_real_escape_string($db) . '\'';
        PMA_query_as_cu($remove_query);
    }
}

?>
