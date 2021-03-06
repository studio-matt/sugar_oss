<?php
$module_name = 'comite_DoctorsNote';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 =>  array (
              'customCode' => '<input title="Generate Appointment PDF" class="button" onclick="this.form.return_module.value=\'comite_DoctorsNote\';this.form.return_action.value=\'DetailView\';this.form.action.value=\'sendTms\';this.form.module.value=\'comite_Letters\';this.form.module_tab.value=\'Contacts\';" name="send_tms_email" value="Generate Appointment PDF" type="submit">'
          ),
          5 =>  array (
              'customCode' => '<input title="Generate Appointment PDF" class="button" onclick="this.form.return_module.value=\'comite_DoctorsNote\';this.form.return_action.value=\'DetailView\';this.form.action.value=\'sendEhe\';this.form.module.value=\'comite_Letters\';this.form.module_tab.value=\'Contacts\';" name="send_ehe_letter" value="Generate Exercise PDF" type="submit">'
          ),
          6 =>  array (
              'customCode' => '<input title="Generate MedTable PDF" class="button" onclick="this.form.return_module.value=\'comite_DoctorsNote\';this.form.return_action.value=\'DetailView\';this.form.action.value=\'Medtable\';this.form.module.value=\'comite_Letters\';this.form.module_tab.value=\'Contacts\';" name="print_medtable_pdf" value="Generate MedTable PDF" type="submit">'
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'comite_doctorsnote_contacts_name',
          ),
          1 => 
          array (
            'name' => 'contact_birthdate',
            'studio' => 'visible',
            'label' => 'LBL_BIRTHDATE',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_detailview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'finalized',
            'label' => 'LBL_FINALIZED',
          ),
          1 => 
          array (
            'name' => 'appointment_type',
            'studio' => 'visible',
            'label' => 'LBL_APPOINTMENT_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'introduction',
            'studio' => 'visible',
            'label' => 'LBL_INTRODUCTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'additional_notes',
            'studio' => 'visible',
            'label' => 'LBL_ADDITIONAL_NOTES',
          ),
        ),
      ),
    ),
  ),
);
?>
