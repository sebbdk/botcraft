<?php
namespace App\Model\Table;

use App\Model\Entity\Schematic;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schematics Model
 *
 * @property \Cake\ORM\Association\HasMany $Worlds
 */
class SchematicsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->addBehavior('Timestamp');

        $this->table('schematics');
        $this->displayField('slug');
        $this->primaryKey('id');
        $this->hasMany('Worlds', [
            'foreignKey' => 'schematic_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');

        $validator
            ->requirePresence('schematic', 'create')
            ->notEmpty('schematic');

        return $validator;
    }
}
