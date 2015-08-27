<?php
namespace App\Model\Table;

use App\Model\Entity\Bot;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bots Model
 *
 * @property \Cake\ORM\Association\HasMany $BotTasks
 */
class BotsTable extends Table
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

        $this->table('bots');
        $this->displayField('slug');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('BotTasks', [
            'foreignKey' => 'bot_id'
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
            ->add('x', 'valid', ['rule' => 'numeric'])
            ->requirePresence('x', 'create')
            ->notEmpty('x');

        $validator
            ->add('y', 'valid', ['rule' => 'numeric'])
            ->requirePresence('y', 'create')
            ->notEmpty('y');

        $validator
            ->requirePresence('inventory', 'create')
            ->notEmpty('inventory');

        return $validator;
    }
}
