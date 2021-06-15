<li>
    <label style="background-color: white; color: black; cursor: pointer;">
    <input id="node-lg_3" checked name="parent_id" value="0" data-id="custom-lg_3" type="radio">
        --No Parent Category--
    </label>
</li>
@php
    function printNestedArray($a,$module,$parent_id) {
        $a = (object) $a;
        $id = $a->id;
        $category_name = $a->name;

        echo "<li>";

        echo "  <label>
                    <input name='parent_id' value='$id' id='node-{$category_name}_{$id}' data-id='custom-{$category_name}_{$id}' type='radio' />
                    {$category_name}
                </label>
            ";

            if (isset($a->child) && is_array($a->child) && count($a->child) > 0) {
                    echo "<i class='fa fa-plus-circle' title='collapse'></i>";
                }

        if (isset($a->child) && is_array($a->child)) {
            // dd($a->child,is_array($a->child));
            echo "<ul>";
                // dd($a->child);
                foreach ($a->child as $child) {
                    $child = (object) $child;
                    $module = $child->name.'_'.$child->id;
                    printNestedArray($child,$module,$a->id);
                }
            echo "</ul>";
            echo "</li>";
        } else {
            // echo htmlspecialchars($value) . '<br />';
        }
    }
    foreach ($categories as $key => $category) {
        $category = (object) $category;
        $module = $category->name.'_'.$category->id;
        printNestedArray($category,$module,$category->id);
    }
@endphp
