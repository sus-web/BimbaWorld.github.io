<?php
namespace DCS\LolzStickedThreads\Entity;

use XF;
use XF\Entity\ApprovalQueue;
use XF\Entity\User;
use XF\Mvc\Entity\Entity;
use XF\Mvc\Entity\Structure;

/**
 * COLUMNS
 * @property int count
 * @property int name
 * @property int link
 */
class StickedThread extends Entity
{
    /**
     * @return bool
     */
    public function canView()
    {
        return XF::visitor()->is_super_admin || XF::visitor()->user_id == $this->user_id;
    }


    /**
     * @param Structure $structure
     *
     * @return Structure
     */
    public static function getStructure(Structure $structure)
    {
        $structure->table = 'xf_dcs_lolz_sticked_threads';
        $structure->shortName = 'DCS\LolzStickedThreads:StickedThread';
        $structure->primaryKey = 'count';
        $structure->columns = [
            'count'  => ['type' => self::UINT, 'autoIncrement' => true],
            'name' => ['type' => self::STR, 'required' => true],
            'link' => ['type' => self::STR, 'required' => true],
        ];

        return $structure;
    }
}
