<?php
//日历类
$calendar = new calendar();
class calendar {
    //当前的年
    private $year;
    //当前的月
    private $month;
    //一个月中第一天是星期几
    private $start_weekday;
    //当前月的天数
    private $days;
    //最大数与最小年数，最大与最小月数
    private $yearMonth = array(2080, 1900, 12, 1);
    //构造函数
    function __construct() {
        if (isset($_GET['year'])) {
           $this->year = $_GET['year'];
        }
            if (isset($_GET['month'])) {
            $this->month = $_GET['month'];
        }
        $this->pnYm($this->year, $this->month);
        $this->days = date('t', mktime(0, 0, 0, $this->month, 1, $this->year));
        $this->start_weekday = date('w', mktime(0, 0, 0, $this->month, 1, $this->year));
        $this->style();
    }
    //输出
    private function style() {
        echo '<table id="calendar">';
        $this->weeklist();
        $this->daylist();
        echo '<table>';
    }
    //年月参数判断
    private function ymCheck($year, $month) {
        if (!is_numeric($year)) {
            $year = date('Y');
        }
        if (!is_numeric($month)) {
            $month = date('m');
        }
        if ($month < $this->yearMonth[3]) {
            $month = $this->yearMonth[2];
            $year -= 1;
        }
        if ($month > $this->yearMonth[2]) {
            $month = $this->yearMonth[3];
            $year = intval($year) + 1;
        }
        $year = $year < $this->yearMonth[1] ? $this->yearMonth[1] : $year;
        $year = $year > $this->yearMonth[0] ? $this->yearMonth[0] : $year;
        return array($year, $month);
    }
    //上一年、下一年、上一月、下一月
    private function pnYm($year, $month) {
        $ym = $this->ymCheck($year, $month);
        $this->year = $ym[0];
        $this->month = $ym[1];
    }
    //weeklist周列表
    private function weeklist() {
        $week = array('日','一','二','三','四','五','六');
        echo '<tr>';
        foreach ($week as $val) {
            echo '<th>'.$val.'</th>';
        }
        echo '</tr>';
    }
    //daylist天列表
    private function daylist() {
        //年月日导航
        echo '<tr>';
        echo '<td><a title="上一年" href="?year='.($this->year-1).'&month='.$this->month.'"><<</a></td>';
        echo '<td><a title="上一月" href="?year='.$this->year.'&month='.($this->month-1).'"><</a></td>';
        echo '<td>&nbsp;&nbsp;</td>';
        echo '<td>&nbsp;&nbsp;</td>';
        echo '<td>&nbsp;&nbsp;</td>';
       echo '<td><a title="下一月" href="?year='.$this->year.'&month='.($this->month+1).'">></a></td>';
       echo '<td><a title="下一年" href="?year='.($this->year+1).'&month='.$this->month.'">>></a></td>';
       echo '</tr>';
       echo '<tr>';
       //输出空格（当前一个月第一天前面要空出来的）
       for($i = 0; $i < $this->start_weekday; $i++) {
             echo '<td>&nbsp;</td>';
       }
       for ($k = 1; $k <= $this->days; $k++) {
            $i++;
            if ($k == date('d')) {
                  echo '<td>'.$k.'</td>';
            }else {
                  echo '<td>'.$k.'</td>';
            }
            if ($i % 7 == 0) {
                 if ($k != $this->days) {
                        echo '</tr><tr>';
                 }
            }
        }
         echo '</tr>';
    }
}
?>