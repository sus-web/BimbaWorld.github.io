<?php

namespace DCS\NextGroupWidget\Widget;

use XF;
use XF\Widget\AbstractWidget;
use XF\Entity;
use XF\Admin\Controller\UserTitleLadder;

class NextGroup extends AbstractWidget
{

    protected function getUserTitleLadder()
    {
        $option = $this->em()->find('XF:Option', 'userTitleLadderField');
        $titles = XF::finder('XF:UserTitleLadder')->fetch();

        $last = 0;
        $next = 0;
        $points = XF::visitor()->{$option->option_value};

        foreach ($titles as $key => $value) {
            if ($key <= $points) {
                $last = $key;
                continue;
            }

            $next = $key;
            break;
        }

        return [
            "title"         => $titles[$last],
            'next_title'    => $titles[$next],
            'last'      => $last,
            "next"      => $next,
            'ladder_type'   => $option->option_value,
            'points'        => $points
        ];
    }

    public function render()
    {
        $user = XF::visitor();

        $titleLadder = $this->getUserTitleLadder();


        $title = $titleLadder['title'];
        $last = $titleLadder['last'];
        $next = $titleLadder['next'];
        $next_title = $titleLadder['next_title'];
        $points = $titleLadder['points'];
        $ladder_type = $titleLadder['ladder_type'];
        // reaction_score / trophy_poins / message_count

        $reactions = ["реакцию", 'реакции', 'реакций'];
        $messages = ['сообщение', 'сообщения', 'сообщений'];
        $trophy_points = ['балл', "балла", "баллов"];

        if ($ladder_type == 'reaction_score') {
            $phrase = XF::phrase("get_x_reaction_score", [
                'x'             => $next - $points,
                'reactions'     => $this->convert_words($next - $points, $reactions)
            ]);
        } elseif ($ladder_type == 'message_count') {
            $phrase = XF::phrase("get_x_message_count", [
                'x'             => $next - $points,
                'messages'     => $this->convert_words($next - $points, $messages)
            ]);
        } else {
            $phrase = XF::phrase("get_x_trophy_points", [
                'x'             => $next - $points,
                'trophy_points'     => $this->convert_words($next - $points, $trophy_points)
            ]);
        }

        return $this->renderer('dcs_next_group_widget', [
            'user'              => $user,
            'title'             => $title,
            'next_title'        => $next_title,
            'last'              => $last,
            'next'              => $next,
            'left'              => $next - $points,
            'ladder_type'       => $ladder_type,
            'phrase'            => $phrase,
        ]);
    }

    protected function convert_words(int $num, array $words)
    {
        $num10 = $num % 10;
        $num100 = $num % 100;
        if ($num10 == 1 && $num100 !== 11) {
            $count = 0;
        } elseif (($num10 <= 2 && $num10 <= 4) && ($num100 < 10 || $num100 >= 20)) {
            $count = 1;
        } else {
            $count = 2;
        }

        return "{$words[$count]}";
    }
}