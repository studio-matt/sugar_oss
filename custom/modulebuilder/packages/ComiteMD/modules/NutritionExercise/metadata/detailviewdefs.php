<?php
$module_name = 'comite_NutritionExercise';
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'comite_nutritionexercise_contacts_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_general_diet',
            'studio' => 'visible',
            'label' => 'LBL_NUTRITION_GENERAL_DIET',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_tea_cups_per_day',
            'label' => 'LBL_NUTRITION_TEA_CUPS_PER_DAY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_coffee_cups_per_day',
            'label' => 'LBL_NUTRITION_COFFEE_CUPS_PER_DAY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_diet_soda_cups_per_day',
            'label' => 'LBL_NUTRITION_DIET_SODA_CUPS_PER_DAY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_water_cups_per_day',
            'label' => 'LBL_NUTRITION_WATER_CUPS_PER_DAY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_high_sugar_per_day',
            'label' => 'LBL_NUTRITION_HIGH_SUGAR_PER_DAY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_alcoholic_servings_per_day',
            'label' => 'LBL_NUTRITION_ALCOHOLIC_SERVINGS_PER_DAY',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_days_per_week_healthiest',
            'studio' => 'visible',
            'label' => 'LBL_NUTRITION_DAYS_PER_WEEK_HEALTHIEST',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_days_per_week_unhealthiest',
            'studio' => 'visible',
            'label' => 'LBL_NUTRITION_DAYS_PER_WEEK_UNHEALTHIEST',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_foods_overeaten',
            'label' => 'LBL_NUTRITION_FOODS_OVEREATEN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nutrition_situational_overeating',
            'label' => 'LBL_NUTRITION_SITUATIONAL_OVEREATING',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'exercise_injury_year',
            'studio' => 'visible',
            'label' => 'LBL_EXERCISE_INJURY_YEAR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'exercise_injury_year_describe',
            'studio' => 'visible',
            'label' => 'LBL_EXERCISE_INJURY_YEAR_DESCRIBE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'exercise_injury_result',
            'studio' => 'visible',
            'label' => 'LBL_EXERCISE_INJURY_RESULT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'exercise_injury_stop_period',
            'label' => 'LBL_EXERCISE_INJURY_STOP_PERIOD',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'exercise_injury_stop_regimen',
            'studio' => 'visible',
            'label' => 'LBL_EXERCISE_INJURY_STOP_REGIMEN',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
