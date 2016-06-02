<?php
/**
 * This file acts as a rudimentary template file for the GitHub projects plugin
 * To use:
 *  - Copy the file to your theme directory, keeping the filename
 *  - Update the functions as you'd like!
 *
 * Note that only this file OR your custom one will be loaded, so you need to
 * make sure each function is provided.
 */

/**
 * Preamble before we get to the projects. This is the place to open your table
 * or unordered list elements.
 *
 * @return HTML output before project list
 */
function ghprojects_pre_list() {
    return '<div class="grid grid--full"><div class="grid__item one-whole post-list">';
}


/**
 * Handle printing an individual project row
 *
 * @return HTML for a single project
 */
function ghprojects_list_project($project) {
    return '
<div class="post-splitter">
    <div class="grid__item date-col">
        <span class="date">'
            . date('d M Y', strtotime($project->pushed_at))
    . ' </span>
    </div><!--
 --><div class="grid__item post-col">'
        . '<h3 class="project-title"><a href="' . $project->html_url . '">'
            . $project->name
        . '</a></h3>'
        . '<p>' . $project->description . '</p>'
        . '</div>
</div>';
}


/**
 * End our project list, close up ul/table etc
 *
 * @return HTML to close out list
 */
function ghprojects_post_list() {
    return '</div></div>';
}
