<?php
/**
 * User: TheCodeholic
 * Date: 3/7/2020
 * Time: 9:36 AM
 */

namespace app\modules\api\resources;

use app\models\Category;


/**
 * Class NoteResource
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\modules\api\resources
 */
class CategoryResource extends Category
{
    public function fields()
    {
        return [
            'id', 'name_ar', 'name_an'
        ];
    }
}