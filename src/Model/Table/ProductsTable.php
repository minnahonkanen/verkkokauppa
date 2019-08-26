<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;
use Cake\I18n\Number;

class ProductsTable Extends Table
{

    public function beforeSave($event, $entity, $option)
    {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->title);
            $entity->slug = substr($sluggedTitle, 0, 191);
        }
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('title', false)
            ->minLength('title', 5)
            ->maxLength('title', 255)

            ->allowEmptyString('description', false)
            ->minLength('description', 10)

            ->allowEmptyString('price', false)
            ->maxLength('price', 6)

            ->allowEmptyString('product_number', false)
            ->minLength('product_number', 6)
            ->maxLength('product_number', 6);

        return $validator;
    }
}
?>
