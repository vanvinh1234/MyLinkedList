<?php
include_once "MyLinkedList.php";
$linkedList = new MyLinkedList();
$linkedList->insertFirst(22);
$linkedList->insertFirst(33);
$linkedList->insertLast(44);
$linkedList->insertLast(55);
$totalNode = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo $totalNode.'<br>';
echo implode('-', $linkData);
