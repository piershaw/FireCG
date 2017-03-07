﻿package {    import flash.display.Sprite;    import flash.events.*;    import flash.net.XMLSocket;	import flash.text.*;    public class XMLSocketExample extends Sprite {        private var hostName:String = "localhost";        private var port:uint = 80;        private var socket:XMLSocket;        public function XMLSocketExample() {            socket = new XMLSocket();            configureListeners(socket);            socket.connect(hostName, port);        }        public function send(data:Object):void {            socket.send(data);        }        private function configureListeners(dispatcher:IEventDispatcher):void {            dispatcher.addEventListener(Event.CLOSE, closeHandler);            dispatcher.addEventListener(Event.CONNECT, connectHandler);            dispatcher.addEventListener(DataEvent.DATA, dataHandler);            dispatcher.addEventListener(IOErrorEvent.IO_ERROR, ioErrorHandler);            dispatcher.addEventListener(ProgressEvent.PROGRESS, progressHandler);            dispatcher.addEventListener(SecurityErrorEvent.SECURITY_ERROR, securityErrorHandler);        }         private function closeHandler(event:Event):void {            trace("closeHandler: " + event);			//  infoText.text = "closed";        }        private function connectHandler(event:Event):void {            trace("connectHandler: " + event);			  infoText.text = "connected";        }        private function dataHandler(event:DataEvent):void {            trace("dataHandler: " + event);			// infoText.text = "data";        }        private function ioErrorHandler(event:IOErrorEvent):void {            trace("ioErrorHandler: " + event);			 infoText.text = "no working";        }        private function progressHandler(event:ProgressEvent):void {            trace("progressHandler loaded:" + event.bytesLoaded + " total: " + event.bytesTotal);			// infoText.text = "loading";        }        private function securityErrorHandler(event:SecurityErrorEvent):void {            trace("securityErrorHandler: " + event);			 infoText.text = "security Error";        }    }}