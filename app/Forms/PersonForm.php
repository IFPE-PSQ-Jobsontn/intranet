<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class PersonForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('cpf', 'text',[
                'label' => trans('labels.cpf'),
                'rules' => 'required|min:11|max:11|regex:^[0-9]{11,11}$',
            ])
            ->add('name', 'text',[
                'label' => trans('labels.name'),
                'rules' => 'required|max:255',
            ])
            ->add('mother', 'text',[
                'label' => trans('labels.mother'),
                'rules' => 'required|max:255',
            ])
            ->add('father', 'text',[
                'label' => trans('labels.father'),
                'rules' => 'max:255',
            ])
            ->add('birth_date', 'date',[
                'label' => trans('labels.birth_date'),
                'rules' => 'date',
            ])
            ->add('registration_number', 'text',[
                'label' => trans('labels.registration_number'),
                'rules' => 'required|max:20',
            ])
            ->add('registry_entity', 'text',[
                'label' => trans('labels.registry_entity'),
                'rules' => 'required|max:20',
            ])
            ->add('registry_entity_uf', 'text',[
                'label' => trans('labels.registry_entity_uf'),
                'rules' => 'required|max:20',
            ])
            ->add('registration_date', 'date',[
                'label' => trans('labels.registration_date'),
                'rules' => 'required|date',
            ])
        ;
    }
}
