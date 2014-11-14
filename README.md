# Generis Movie DataBase Ontology

## Overview
Generis Movie DataBase Ontology is an RDF/RDFS ontology referencing movies by years, along with their starring and directors.
This ontology is derived from [DBPedia](http://dbpedia.org), the Semantic Web equivalent of [Wikipedia](http://www.wikipedia.org).

The provided files representing the ontology are using the [RDF/XML](http://en.wikipedia.org/wiki/RDF/XML) serialization.

## License
As for DBPedia, this derivate work is released under the terms of the [Creative Commons Attribution-ShareAlike 3.0 License](http://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License)
and the [GNU Free Documentation License](http://en.wikipedia.org/wiki/Wikipedia:Text_of_the_GNU_Free_Documentation_License).

## Available Years
At the present time, all movies referenced by DBPedia are delivered for years 2010 to 2014. This means approximatively 80.000 triples.

## Available Languages
If available, Literal resources of this ontology are provided in the following languages:

* French
* Dutch
* English
* Arabic
* Spanish
* Italian
* Polish
* Portugese
* German
* Japanese
* Russian
* Chinese

## Example of Use
A scenario to use this ontology is to make it part of a TAO extension as its data model. In this way, when installing the
extension, the ontology gets imported and you are ready to go! The following sample _manifest.php_ file is a good example
of use:

```php
<?php
$extpath = dirname(__FILE__) . DIRECTORY_SEPARATOR;
$taopath = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'tao' . DIRECTORY_SEPARATOR;

return array(
	'name' => 'taoMovies',
    'label' => 'TAO Movies',
	'description' => 'TAO Movies Extension',
    'license' => 'GPL-2.0',
    'version' => '1.0.0',
	'author' => 'Open Assessment Technologies',
	'requires' => array(
	    'tao' => '>=2.6'
    ),
	'models' => array(
	    'http://www.taotesting.com/movies.rdf'
	),
    'autoload' => array (
        'psr-4' => array(
            'oat\\taoMovies\\' => dirname(__FILE__) . DIRECTORY_SEPARATOR
        )
    ),
    // Use GMDB from 2010 to 2014!
    'install' => array(
        'rdf' => array(
            dirname(__FILE__) . '/model/ontology/movies.rdf',
            dirname(__FILE__) . '/model/ontology/2010/films.rdf',
            dirname(__FILE__) . '/model/ontology/2010/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2010/directors.rdf',
            dirname(__FILE__) . '/model/ontology/2011/films.rdf',
            dirname(__FILE__) . '/model/ontology/2011/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2011/directors.rdf',
            dirname(__FILE__) . '/model/ontology/2012/films.rdf',
            dirname(__FILE__) . '/model/ontology/2012/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2012/directors.rdf',
            dirname(__FILE__) . '/model/ontology/2013/films.rdf',
            dirname(__FILE__) . '/model/ontology/2013/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2013/directors.rdf',
            dirname(__FILE__) . '/model/ontology/2014/films.rdf',
            dirname(__FILE__) . '/model/ontology/2014/starring.rdf',
            dirname(__FILE__) . '/model/ontology/2014/directors.rdf',
        )
    )
);
```
