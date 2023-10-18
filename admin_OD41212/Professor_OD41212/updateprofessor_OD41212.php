<?php
include 'member_OD41212.php';

echo "<HTML>";
echo "<Title> Edit Professor </Title>";
echo "<Center>";
echo "<H1> Edit Professor Data        ---     <A Href=/~andylo1/FinalProject_Rate_Professor/admin_OD41212/page1_OD41212.php> Home </A></H1>";
echo "<Form action=update2professor_OD41212.php method=post>";
echo "<Table border=0>";
echo "<Tr><Td>";

$pid = $_GET['pid'];
echo "<H3> id = $pid";
echo "</Td><Td>";
echo "<Input type=hidden name=pid value=$pid> <Br>";
echo "</Td></Tr>";
echo "<Tr><Td>";

echo "<H3> Professor Name ";
echo "</Td><Td>";
echo "<Input type=text name=professor> <Br>";
echo "</Td></Tr>";
echo "<Tr><Td>";

echo "<H3> Email ";
echo "</Td><Td>";
echo "<Input type=text name=email> <Br>";
echo "</Td></Tr>";
echo "<Tr><Td>";

echo "<H3> University ";
echo "</Td><Td>";
echo "<Input type=text name=university> <Br>";
echo "</Td></Tr>";
echo "<Tr><Td>";

echo "<H3> Course ";
echo "</Td><Td>";
echo "<Input type=text name=course> <Br>";
echo "</Td></Tr>";
echo "<Tr><Td>";

echo "<Table border=0 width=70%><Tr><Td valign=top>";
echo "<Input type=submit value=Submit>  </Form>";
echo "</Td><Td valign=top>";
echo "<form action=displayprofessor_OD41212.php><Input type=submit value=Cancel></form>";
echo "</Td></Tr></Table>";
echo "</Td></Tr></Table>";
echo "</Center>";
echo "</HTML>";
?>