<?php

return array(
    'name'        => 'taoGmdb',
    'label'       => 'Generis Move DataBase',
    'description' => 'A TAO Extension containing a multi-lingual set of movie descritpions.',
    'license'     => 'GFDL - CC BY-SA 3.0',
    'version'     => '1.0.0',
    'author'      => 'Open Assessment Technologies SA',
    'requires' => [
        'tao' => '>=7.35.0'
    ],
    'install' => array(
        'rdf' => array(
            dirname(__FILE__) . '/model/ontology/movies.rdf',
            dirname(__FILE__) . '/model/ontology/2008/films.rdf',
            dirname(__FILE__) . '/model/ontology/2008/abstracts.rdf',
            dirname(__FILE__) . '/model/ontology/2008/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2008/directors.rdf',
            dirname(__FILE__) . '/model/ontology/2009/films.rdf',
            dirname(__FILE__) . '/model/ontology/2009/abstracts.rdf',
            dirname(__FILE__) . '/model/ontology/2009/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2009/directors.rdf',
            dirname(__FILE__) . '/model/ontology/2010/films.rdf',
            dirname(__FILE__) . '/model/ontology/2010/abstracts.rdf',
            dirname(__FILE__) . '/model/ontology/2010/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2010/directors.rdf',
            dirname(__FILE__) . '/model/ontology/2011/films.rdf',
            dirname(__FILE__) . '/model/ontology/2011/abstracts.rdf',
            dirname(__FILE__) . '/model/ontology/2011/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2011/directors.rdf',
            dirname(__FILE__) . '/model/ontology/2012/films.rdf',
            dirname(__FILE__) . '/model/ontology/2012/abstracts.rdf',
            dirname(__FILE__) . '/model/ontology/2012/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2012/directors.rdf',
            dirname(__FILE__) . '/model/ontology/2013/films.rdf',
            dirname(__FILE__) . '/model/ontology/2013/abstracts.rdf',
            dirname(__FILE__) . '/model/ontology/2013/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2013/directors.rdf',
            dirname(__FILE__) . '/model/ontology/2014/films.rdf',
            dirname(__FILE__) . '/model/ontology/2014/abstracts.rdf',
            dirname(__FILE__) . '/model/ontology/2014/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2014/directors.rdf',
        )
    )
);
