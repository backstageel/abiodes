<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Organizacaos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pessoas
 * @property \Cake\ORM\Association\HasMany $Liderancas
 *
 * @method \App\Model\Entity\Organizacao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Organizacao newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Organizacao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Organizacao|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organizacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Organizacao[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Organizacao findOrCreate($search, callable $callback = null, $options = [])
 */
class OrganizacaosTable extends Table
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

        $this->table('organizacaos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Pessoas', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Liderancas', [
            'foreignKey' => 'organizacao_id'
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

        $validator
            ->allowEmpty('data_criacao');

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
        $rules->add($rules->existsIn(['pessoa_id'], 'Pessoas'));

        return $rules;
    }
}
