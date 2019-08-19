<?php
function categoryTree($data, $parent_id = null)
{
  foreach ($data as $value) {
    if ($value->parent_id == $parent_id) {
      echo '<ul>';
      echo '<li class="category-item" data-id="'.$value->id.'">' . $value->name;
      categoryTree($data, $value->id);
      echo '</li>';
      echo '</ul>';
    }
  }
}

function categorySelect($data, $parent_id = null, $select = null, $str = null)
{
  $xhtml = '';
  foreach ($data as $value) {
    if($value->parent_id == $parent_id){
      if($select != 0 && $select == $value->id){
        echo "<option value='$value->id' parent_id='$value->parent_id' selected>$str $value->name</option>";
      }else{
        echo "<option value='$value->id' parent_id='$value->parent_id'>$str $value->name</option>";
      }
      categorySelect($data, $value->id, $select, $str.'-');
    }
  }
  return $xhtml;
}
