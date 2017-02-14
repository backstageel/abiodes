<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Liderancas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Organizacaos
 * @property \Cake\ORM\Association\BelongsTo $Pessoas
 * @property \Cake\ORM\Association\HasMany $Membros
 *
 * @method \App\Model\Entity\Lideranca get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lideranca newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lideranca[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lideranca|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lideranca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lideranca[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lideranca findOrCreate($search, callable $callback = null, $options = [])
 */
class LiderancasTable extends Table
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

        $this->table('liderancas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Organizacaos', [
            'foreignKey' => 'organizacao_id'
        ]);
        $this->belongsTo('Pessoas', [
            'foreignKey' => 'pessoa_id'
        ]);
        $this->hasMany('Membros', [
            'foreignKey' => 'lideranca_id'
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
        $rules->add($rules->existsIn(['organizacao_id'], 'Organizacaos'));
        $rules->add($rules->existsIn(['pessoa_id'], 'Pessoas'));

        return $rules;
    }
}
