Welcome to Archive Upload Class Repository!
===================


Hey! Ever needed to upload a file to your server, be it photo, video, or document, and was too lazy to go there in PHP documentation to see how the file upload and move functions work? With that thought, I created a class to make our life easier.

It's a simple class you'll pass to the file variable ($ _FILES) that comes from the html form in your constructor and then put the destination path you want to upload


----------


Simple example
-------------
```php
$file = new File($_FILES['foo']);
$file->setDestinationPath('./uploads');
$file->save();
```




> **Notes:**

> - ```$file->setName('bar')``` method is optional, by default is original file's name.
> - ```$file->setDestinationPath()``` is required, case you don't put it, the class will give an exception.


#### <i class="icon-list"></i> Methods list

> - ```$file->getType()``` returns file type .
> - ```$file->getSize()``` returns file size.
> - ```$file->getTempName()``` returns file temporary name.
> - ```$file->getName()``` returns original file name.
> - ```$file->setName('blah')``` set file name .
> - ```$file->save()``` move file to destinationPath with name that you given.
