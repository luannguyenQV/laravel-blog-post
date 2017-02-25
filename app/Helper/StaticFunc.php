<?php
/**
 * Created by PhpStorm.
 * User: van
 * Date: 6/26/2016
 * Time: 3:32 PM
 */
class StaticFunc {

    public static function renderNode($node) {
        if( $node->isLeaf() ) {
            return '<li>' . $node->name . '</li>';
        } else {
            $html = '<li>' . $node->name;

            $html .= '<ul>';

            foreach($node->children as $child)
                $html .= StaticFunc::renderNode($child);

            $html .= '</ul>';

            $html .= '</li>';
        }

        return $html;
    }

    public static function renderNodeLink($node) {
        if( $node->isLeaf() ) {
            return '<li><a href="' . url('san-pham') . '/' .  $node->slug .'">' . $node->name . '</a></li>';
        } else {
            $html = '<li><a href="' . url('san-pham') . '/' . $node->slug .'">' . $node->name;

            $html .= '<ul class="category">';

            foreach($node->children as $child)
                $html .= StaticFunc::renderNodeLink($child);

            $html .= '</ul>';

            $html .= '</a></li>';
        }
        return $html;
    }

    public static function renderNodeBackend($node) {
        if( $node->isLeaf() ) {
            return '<li>
                        <a href="' . url('admin/categories') . '/' .  $node->slug .'">' . $node->name . '</a>
                    </li>';
        } else {
            $html = '<li><a href="' . url('admin/categories') . '/' . $node->slug .'">' . $node->name;

            $html .= '<ul class="category">';

            foreach($node->children as $child)
                $html .= StaticFunc::renderNodeBackend($child);

            $html .= '</ul>';

            $html .= '</a></li>';
        }
        return $html;
    }

}