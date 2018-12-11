<?php defined( 'WPINC' ) or die('Nothing to see here.'); return array (
  'tables' => 
  array (
    'news_article' => 
    array (
      'name' => 'news_article',
      'relationship' => 
      array (
        'type' => 'post',
        'post_type' => 'newsroom',
      ),
      'primary_key' => 
      array (
        0 => 'id',
      ),
      'keys' => 
      array (
        0 => 
        array (
          'name' => 'post_id',
          'columns' => 
          array (
            0 => 'post_id',
          ),
          'unique' => true,
        ),
      ),
      'columns' => 
      array (
        0 => 
        array (
          'name' => 'id',
          'format' => '%d',
          'null' => false,
          'auto_increment' => true,
          'unsigned' => true,
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'id',
          ),
        ),
        1 => 
        array (
          'name' => 'post_id',
          'format' => '%d',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'post_id',
          ),
        ),
        2 => 
        array (
          'name' => 'author_image',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'author_image',
          ),
          'format' => '%s',
        ),
        3 => 
        array (
          'name' => 'author_name',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'author_name',
          ),
          'format' => '%s',
        ),
        4 => 
        array (
          'name' => 'author_position',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'author_position',
          ),
          'format' => '%s',
        ),
        5 => 
        array (
          'name' => 'author_facebook',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'author_facebook',
          ),
          'format' => '%s',
        ),
        6 => 
        array (
          'name' => 'author_linkedin',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'author_linkedin',
          ),
          'format' => '%s',
        ),
        7 => 
        array (
          'name' => 'news_article',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'news_article',
          ),
          'format' => '%s',
        ),
        8 => 
        array (
          'name' => 'news_blockquote',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'news_blockquote',
          ),
          'format' => '%s',
        ),
        9 => 
        array (
          'name' => 'news_footer',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'news_footer',
          ),
          'format' => '%s',
        ),
      ),
      'hash' => '1583bc0576c5fedd74a4254b7b0181ae',
      'modified' => 1536470281,
      'type' => 'meta',
    ),
    'news_header' => 
    array (
      'name' => 'news_header',
      'relationship' => 
      array (
        'type' => 'post',
        'post_type' => 'newsroom',
      ),
      'primary_key' => 
      array (
        0 => 'id',
      ),
      'keys' => 
      array (
        0 => 
        array (
          'name' => 'post_id',
          'columns' => 
          array (
            0 => 'post_id',
          ),
          'unique' => true,
        ),
      ),
      'columns' => 
      array (
        0 => 
        array (
          'name' => 'id',
          'format' => '%d',
          'null' => false,
          'auto_increment' => true,
          'unsigned' => true,
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'id',
          ),
        ),
        1 => 
        array (
          'name' => 'post_id',
          'format' => '%d',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'post_id',
          ),
        ),
        2 => 
        array (
          'name' => 'news_image',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'news_image',
          ),
          'format' => '%s',
        ),
        3 => 
        array (
          'name' => 'news_category',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'news_category',
          ),
          'format' => '%s',
        ),
        4 => 
        array (
          'name' => 'news_title',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'news_title',
          ),
          'format' => '%s',
        ),
        5 => 
        array (
          'name' => 'news_location',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'news_location',
          ),
          'format' => '%s',
        ),
        6 => 
        array (
          'name' => 'news_type',
          'map' => 
          array (
            'type' => 'acf_field_name',
            'identifier' => 'news_type',
          ),
          'format' => '%s',
        ),
      ),
      'hash' => '4b8ad8290cbb319c44331b4c5944d992',
      'modified' => 1536420563,
      'type' => 'meta',
    ),
  ),
  'table_names' => 
  array (
    0 => 'news_article',
    1 => 'news_header',
  ),
  'types' => 
  array (
    'post' => 
    array (
      0 => 0,
      1 => 1,
    ),
  ),
  'post_types' => 
  array (
    'newsroom' => 
    array (
      0 => 0,
      1 => 1,
    ),
  ),
  'join_tables' => 
  array (
  ),
  'meta_tables' => 
  array (
  ),
  'acf_field_names' => 
  array (
    'post:newsroom' => 
    array (
      'id' => 
      array (
        0 => 0,
        1 => 1,
      ),
      'post_id' => 
      array (
        0 => 0,
        1 => 1,
      ),
      'author_image' => 
      array (
        0 => 0,
      ),
      'author_name' => 
      array (
        0 => 0,
      ),
      'author_position' => 
      array (
        0 => 0,
      ),
      'author_facebook' => 
      array (
        0 => 0,
      ),
      'author_linkedin' => 
      array (
        0 => 0,
      ),
      'news_article' => 
      array (
        0 => 0,
      ),
      'news_blockquote' => 
      array (
        0 => 0,
      ),
      'news_footer' => 
      array (
        0 => 0,
      ),
      'news_image' => 
      array (
        0 => 1,
      ),
      'news_category' => 
      array (
        0 => 1,
      ),
      'news_title' => 
      array (
        0 => 1,
      ),
      'news_location' => 
      array (
        0 => 1,
      ),
      'news_type' => 
      array (
        0 => 1,
      ),
    ),
  ),
  'acf_field_column_names' => 
  array (
  ),
);