<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Membros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Liderancas
 * @property \Cake\ORM\Association\BelongsTo $Pessoas
 *
 * @method \App\Model\Entity\Membro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Membro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Membro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Membro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Membro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Membro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Membro findOrCreate($search, callable $callback = null, $options = [])
 */
class MembrosTable extends Table
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

        $this->table('membros');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Liderancas', [
            'foreignKey' => 'lideranca_id'
        ]);
        $this->belongsTo('Pessoas', [
            'foreignKey' => 'pessoa_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['lideranca_id'], 'Liderancas'));
        $rules->add($rules->existsIn(['pessoa_id'], 'Pessoas'));

        return $rules;
    }
}
