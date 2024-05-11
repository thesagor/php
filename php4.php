<?php
//data scrumbler project where has encode decode key generate button
//for loop

$string = "Hello World, We are people and world wha ha ha hah aae are man. Lorem ipsum dolor sit amet, Hasina is mudered. consectetur adipisicing elit. Ad aliquam, aperiam asperiores autem culpa cumque ducimus exercitationem facere impedit iure maiores mollitia, quia, reiciendis repellendus repudiandae soluta suscipit totam. Architecto culpa dicta est fugiat impedit ipsa minus odio quas repellendus reprehenderit velit, veniam voluptas voluptate. Animi autem culpa deserunt dolorum harum officiis perspiciatis placeat veritatis? Aut culpa distinctio ducimus error in nihil nostrum quia quibusdam ratione voluptates. Animi harum illum nobis quae! Doloribus excepturi, fugiat fugit recusandae sint ullam? Asperiores ipsum odit praesentium recusandae veritatis! Accusamus doloribus hic ipsam molestias quidem reprehenderit rerum, saepe temporibus vero voluptates? Architecto at aut autem cumque dignissimos dolorem dolorum expedita illo libero, mollitia nihil, odio rerum. Accusamus alias amet aperiam aspernatur at delectus deleniti dignissimos dolore, dolores, eaque eveniet excepturi explicabo facere iusto minus mollitia neque nobis, numquam optio placeat rem rerum sit soluta temporibus ut vel vitae voluptatibus! Ab iste maiores quae recusandae! ";
$explod = explode(" ", $string);
$count = count($explod) - 101;
$charge = $count * 5;

$khuji = stripos($string, "hasina") . "\n";
print_r($khuji);

echo "His charge for taking extra $count word is $charge";













