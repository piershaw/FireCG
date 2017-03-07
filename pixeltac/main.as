﻿package {    import flash.display.*;	import flash.events.*;	import flash.net.*;    import flash.xml.*;	import flash.text.*;   	import flash.display.BitmapData; 	import flash.geom.Point;	import flash.geom.Rectangle;	import flash.filters.BlurFilter;    public class main extends MovieClip {        public function main() {            var result:XMLDocument = new XMLDocument();            result.ignoreWhite = true;            result.parseXML(getXMLString());									var bmd:BitmapData = new BitmapData(80, 30, false, 0xFFCC00);			var rect:Rectangle = new Rectangle(0, 0, this.mainImage.width, this.mainImage.height)			//var rect:Rectangle = new Rectangle(10, 10, 40, 10);			bmd.fillRect(rect, 0xFF0000);						var pt:Point = new Point(10, 10);			var filter:BlurFilter = new BlurFilter();			bmd.applyFilter(bmd, rect, pt, filter);						var bm:Bitmap = new Bitmap(bmd);			addChild(bm);						            var books:Array = parseBooks(result.firstChild);            trace("books: \n" + books);        }        private function parseBooks(node:XMLNode):Array {            var books:Array = new Array();            var kids:Array = node.childNodes;            for each(var item:XMLNode in kids) {                parseBook(item, books);            }            return books;        }        private function parseBook(node:XMLNode, books:Array):void {            var item:Book = new Book();            item.setPublisher(node.attributes.publisher);            item.setName(node.attributes.name);            books.push(item);        }        private function getXMLString():String {            var list:XML = <books>                                <book publisher="Addison-Wesley" name="Design Patterns" />                                <book publisher="Addison-Wesley" name="The Pragmatic Programmer" />                                <book publisher="Addison-Wesley" name="Test Driven Development" />                                <book publisher="Addison-Wesley" name="Refactoring to Patterns" />                                <book publisher="O'Reilly Media" name="The Cathedral & the Bazaar" />                                <book publisher="O'Reilly Media" name="Unit Test Frameworks" />                            </books>;            return list.toXMLString();        }    }}class Book {    private var publisher:String;    private var name:String;    public function setPublisher(publisher:String):void {        this.publisher = publisher;    }    public function setName(name:String):void {        this.name = name;    }    public function toString():String {        return "[Book name: " + name + " publisher: " + publisher + "]\n";    }}