<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Zcyh]].
 *
 * @see Zcyh
 */
class ZcyhQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Zcyh[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Zcyh|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}