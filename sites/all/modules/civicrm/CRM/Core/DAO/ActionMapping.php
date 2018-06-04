<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from xml/schema/CRM/Core/ActionMapping.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:3ae720be63fdf4626db2d1508c2d8f44)
 */

/**
 * Database access object for the ActionMapping entity.
 */
class CRM_Core_DAO_ActionMapping extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_action_mapping';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = FALSE;

  /**
   * @var int unsigned
   */
  public $id;

  /**
   * Entity for which the reminder is created
   *
   * @var string
   */
  public $entity;

  /**
   * Entity value
   *
   * @var string
   */
  public $entity_value;

  /**
   * Entity value label
   *
   * @var string
   */
  public $entity_value_label;

  /**
   * Entity status
   *
   * @var string
   */
  public $entity_status;

  /**
   * Entity status label
   *
   * @var string
   */
  public $entity_status_label;

  /**
   * Entity date
   *
   * @var string
   */
  public $entity_date_start;

  /**
   * Entity date
   *
   * @var string
   */
  public $entity_date_end;

  /**
   * Entity recipient
   *
   * @var string
   */
  public $entity_recipient;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_action_mapping';
    parent::__construct();
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Action Mapping ID'),
          'required' => TRUE,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ],
        'entity' => [
          'name' => 'entity',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Action Mapping Entity'),
          'description' => 'Entity for which the reminder is created',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ],
        'entity_value' => [
          'name' => 'entity_value',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Action Mapping Entity Value'),
          'description' => 'Entity value',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ],
        'entity_value_label' => [
          'name' => 'entity_value_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Value Label'),
          'description' => 'Entity value label',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ],
        'entity_status' => [
          'name' => 'entity_status',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Status'),
          'description' => 'Entity status',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ],
        'entity_status_label' => [
          'name' => 'entity_status_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Status Label'),
          'description' => 'Entity status label',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ],
        'entity_date_start' => [
          'name' => 'entity_date_start',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Start Date'),
          'description' => 'Entity date',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ],
        'entity_date_end' => [
          'name' => 'entity_date_end',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity End Date'),
          'description' => 'Entity date',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ],
        'entity_recipient' => [
          'name' => 'entity_recipient',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Recipient'),
          'description' => 'Entity recipient',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'action_mapping', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'action_mapping', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
