<?php include('header.php'); ?>
	
<style>

	ul {
		padding-bottom:5px;
	}

	li.question {
	  font-weight:bold;
	  font-size:1.3em;
	  padding-bottom:5px;
	}
	li.answer {
	 list-style: none;
	 padding-bottom: 5px;
	}

</style>

<h2>Style Guide</h2>
<ul>
	<li class="question">Working with Images</li>
	<li class="answer">
		<ul>
			<li>Upload a full size image.  Wordpress will create multiple sizes and we recommend using the 'large' size in the dropdown.</li>
			<li>Select 'none' in the Link To: field when inserting images.  Users can double tap images to zoom in.</li>
			<li>At times the very edges of images are cut off.  An example is a full width image as the first thing in a chapter.  You can surround them with a paragraph tag with class of 'nocaption' if seeing the very edges is critical.  This is because Pressbooks attaches a class of 'indent' to paragraphs and this is a workaround.</li>
			<li>The user interface of Pressbooks allows you to insert image galleries.  We do not support this feature.</li>
		</ul>
	</li>
	<li class="question">MS Word</li>
	<li class="answer">
		<ul>
			<li>Use <a target="_blank" href="https://www.youtube.com/watch?v=h1-ZdH3cC48">this guide</a> to import MS Word docs into Pressbooks.</li>
		</ul>
	</li>
	<li class="question">Footnotes</li>
	<li class="answer">
		<ul>
			<li>You can insert footnotes using the "Insert Footnote" button and it will add them to the end of your chapter.  The only caveat is that the bookmarks in the PDF output are thrown off a bit.</li>
			<li>The "Convert MS Word" Footnote feature may not work under some circumstances.</li>
		</ul>
	</li>
	<li class="question">Miscellaneous</li>
	<li class="answer">
		<ul>
			<li>All media files, including images/audio/video, must use latin based characters for the filenames or it may break the output when the book is rendered.</li>
			<li>To link between chapters, make sure that the chapter slug is in English and as follows: <strong>/chapter/chapter3/</strong></li>
			<li>The website can be used as a decent estimation of what the book will look like, but it's very important to get it onto a device for testing as early in the process as possible.</li>
			<li>If you have a left to right chapter (for example, an English appendix) in an ePub that is a right to left, you will need to surround the contents of the chapter with a div with direction ltr.  Check the Uyghur book for an example.</li>
		</ul>
	</li>
</ul>


<?php include('footer.php'); ?>