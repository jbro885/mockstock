<?
switch($_GET['chart']){
case "my_investments":my_investments();break;
}
function my_investments(){
 echo "[['1','2','3','4','5','6','7','8','9','10','11','12','13','14'],
[{
                name: 'Tokyo',
                data: [0.0, 0.9, 0.5, 4.5, 8.2, 1.5, 5.2, 6.5, 3.3, 8.3, 3.9, 0.6,1,10]
            }, {
                name: 'New York',
                data: [0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5,10,10]
            }, {
                name: 'Berlin',
                data: [1.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0,10,10]
            }, {
                name: 'London',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8,10,10]
            }]
            ]";
}
?>
