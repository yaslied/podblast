<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Podcasts Model
 *
 * @property &\Cake\ORM\Association\BelongsTo $Canais
 *
 * @method \App\Model\Entity\Podcast get($primaryKey, $options = [])
 * @method \App\Model\Entity\Podcast newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Podcast[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Podcast|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Podcast saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Podcast patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Podcast[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Podcast findOrCreate($search, callable $callback = null, $options = [])
 */
class PodcastsTable extends Table
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

        $this->addBehavior('UploadRed');
        $this->addBehavior('DeleteArq');
        $this->setTable('podcasts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('numero_ep')
            ->requirePresence('numero_ep', 'create')
            ->notEmptyString('numero_ep');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->scalar('capa')
            ->maxLength('capa', 255)
            ->requirePresence('capa', 'create')
            ->notEmptyString('capa');

        $validator
            ->scalar('arquivo')
            ->maxLength('arquivo', 255)
            ->requirePresence('arquivo', 'create')
            ->notEmptyString('arquivo');

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
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));

        return $rules;
    }

    public function getPodcasts($id)
    {

        $query = $this->find()->select()->where(['usuario_id' => $id]);
        return $query->last();
    }
}
