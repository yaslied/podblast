<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CanaisTags Model
 *
 * @property \App\Model\Table\CanalsTable&\Cake\ORM\Association\BelongsTo $Canals
 * @property \App\Model\Table\TagsTable&\Cake\ORM\Association\BelongsTo $Tags
 *
 * @method \App\Model\Entity\CanaisTag get($primaryKey, $options = [])
 * @method \App\Model\Entity\CanaisTag newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CanaisTag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CanaisTag|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CanaisTag saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CanaisTag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CanaisTag[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CanaisTag findOrCreate($search, callable $callback = null, $options = [])
 */
class CanaisTagsTable extends Table
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

        $this->setTable('canais_tags');
        $this->setDisplayField('canal_id');
        $this->setPrimaryKey(['canal_id', 'tag_id']);

        $this->belongsTo('Canais', [
            'foreignKey' => 'canal_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tags', [
            'foreignKey' => 'tag_id',
            'joinType' => 'INNER',
        ]);
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
        $rules->add($rules->existsIn(['canal_id'], 'Canals'));
        $rules->add($rules->existsIn(['tag_id'], 'Tags'));

        return $rules;
    }
}
