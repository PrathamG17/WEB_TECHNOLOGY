<html>
	<body>
		<h1>Reading XML File With DOM Extension</h1>
		
		<pre>
			<?php
				ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);
				
				$doc = new DOMDocument();
				
				$doc->load("book.xml");
				
				traverseDocument($doc);
				
				function traverseDocument($node)
				{
					switch($node->nodeType)
					{
						case XML_ELEMENT_NODE :
									print("<b>\tFound Element : \"$node->tagName\"</b>");
									
									if($node->hasAttributes())
									{
										print("<b> with attributes : </b>");
										
										foreach($node->attributes as $attribute)
											print("<b>$attribute->name = \"$attribute->value\"</b>");
									}
									
									print("\n");
									
									break;
						case XML_TEXT_NODE :
									if(trim($node->wholeText))
										print("<b>\tFound Text node : \"$node->wholeText\"\n</b>");
									
									break;
									
						case XML_CDATA_SECTION_NODE :
									
									if(trim($node->data))
										print("<b>Found Character Data Node : \"".htmlspecialchars($node->data)."\"\n</b>");
									
									break;
					}
					
					if($node->hasChildNodes())
					{
						foreach($node->childNodes as $child)
							traverseDocument($child);
					}
				}
			?>
		</pre>
	</body>
</html>

