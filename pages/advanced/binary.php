<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>SQL Functions</title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
  <div class="animated-bg"></div>
  <div class="animated-overlay"></div>

  <aside class="sidebar" id="sidebar">
    <div class="brand">
      <div class="fw-bold">SQL Functions</div>
    </div>

    <nav class="px-2">

      <a class="nav-link d-flex justify-content-between align-items-center"
         data-bs-toggle="collapse" href="#stringFunctions" role="button"
         aria-expanded="false" aria-controls="stringFunctions">
        <span><i class="bi bi-type me-2"></i>MySQL String Functions</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
      <div class="collapse ps-3" id="stringFunctions" data-bs-parent="#sidebar">
  <a class="nav-link py-1" href="/IT223-task3/pages/string/ascii.php">ASCII</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/char_length.php">CHAR_LENGTH</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/character_length.php">CHARACTER_LENGTH</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/concat.php">CONCAT</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/concat_ws.php">CONCAT_WS</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/field.php">FIELD</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/find_in_set.php">FIND_IN_SET</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/format.php">FORMAT</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/insert.php">INSERT</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/instr.php">INSTR</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/lcase.php">LCASE</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/left.php">LEFT</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/length.php">LENGTH</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/locate.php">LOCATE</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/lower.php">LOWER</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/lpad.php">LPAD</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/ltrim.php">LTRIM</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/mid.php">MID</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/position.php">POSITION</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/repeat.php">REPEAT</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/replace.php">REPLACE</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/reverse.php">REVERSE</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/right.php">RIGHT</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/rpad.php">RPAD</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/rtrim.php">RTRIM</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/space.php">SPACE</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/strcmp.php">STRCMP</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/substr.php">SUBSTR</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/substring.php">SUBSTRING</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/substring_index.php">SUBSTRING_INDEX</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/trim.php">TRIM</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/ucase.php">UCASE</a>
  <a class="nav-link py-1" href="/IT223-task3/pages/string/upper.php">UPPER</a>
</div>


      <a class="nav-link d-flex justify-content-between align-items-center"
         data-bs-toggle="collapse" href="#numericFunctions" role="button"
         aria-expanded="false" aria-controls="numericFunctions">
        <span><i class="bi bi-calculator me-2"></i>MySQL Numeric Functions</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
      <div class="collapse ps-3" id="numericFunctions" data-bs-parent="#sidebar">
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/abs.php">ABS</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/acos.php">ACOS</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/asin.php">ASIN</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/atan.php">ATAN</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/atan2.php">ATAN2</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/avg.php">AVG</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/ceil.php">CEIL</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/ceiling.php">CEILING</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/cos.php">COS</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/cot.php">COT</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/count.php">COUNT</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/degrees.php">DEGREES</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/div.php">DIV</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/exp.php">EXP</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/floor.php">FLOOR</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/greatest.php">GREATEST</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/least.php">LEAST</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/ln.php">LN</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/log.php">LOG</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/log10.php">LOG10</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/log2.php">LOG2</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/max.php">MAX</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/min.php">MIN</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/mod.php">MOD</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/pi.php">PI</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/pow.php">POW</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/power.php">POWER</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/radians.php">RADIANS</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/rand.php">RAND</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/round.php">ROUND</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/sign.php">SIGN</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/sin.php">SIN</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/sqrt.php">SQRT</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/sum.php">SUM</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/tan.php">TAN</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/numeric/truncate.php">TRUNCATE</a>
    </div>


      <a class="nav-link d-flex justify-content-between align-items-center"
         data-bs-toggle="collapse" href="#dateFunctions" role="button"
         aria-expanded="false" aria-controls="dateFunctions">
        <span><i class="bi bi-calendar-event me-2"></i>MySQL Date Functions</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
     <div class="collapse ps-3" id="dateFunctions" data-bs-parent="#sidebar">
        <a class="nav-link py-1" href="/IT223-task3/pages/date/adddate.php">ADDDATE</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/addtime.php">ADDTIME</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/curdate.php">CURDATE</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/current_date.php">CURRENT_DATE</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/current_time.php">CURRENT_TIME</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/current_timestamp.php">CURRENT_TIMESTAMP</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/curtime.php">CURTIME</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/date.php">DATE</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/datediff.php">DATEDIFF</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/date_add.php">DATE_ADD</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/date_format.php">DATE_FORMAT</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/date_sub.php">DATE_SUB</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/day.php">DAY</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/dayname.php">DAYNAME</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/dayofmonth.php">DAYOFMONTH</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/dayofweek.php">DAYOFWEEK</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/dayofyear.php">DAYOFYEAR</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/extract.php">EXTRACT</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/from_days.php">FROM_DAYS</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/hour.php">HOUR</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/last_day.php">LAST_DAY</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/localtime.php">LOCALTIME</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/localtimestamp.php">LOCALTIMESTAMP</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/makedate.php">MAKEDATE</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/maketime.php">MAKETIME</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/microsecond.php">MICROSECOND</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/minute.php">MINUTE</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/month.php">MONTH</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/monthname.php">MONTHNAME</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/now.php">NOW</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/period_add.php">PERIOD_ADD</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/period_diff.php">PERIOD_DIFF</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/quarter.php">QUARTER</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/second.php">SECOND</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/sec_to_time.php">SEC_TO_TIME</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/str_to_date.php">STR_TO_DATE</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/subdate.php">SUBDATE</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/subtime.php">SUBTIME</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/sysdate.php">SYSDATE</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/time.php">TIME</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/time_format.php">TIME_FORMAT</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/time_to_sec.php">TIME_TO_SEC</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/timediff.php">TIMEDIFF</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/timestamp.php">TIMESTAMP</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/to_days.php">TO_DAYS</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/week.php">WEEK</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/weekday.php">WEEKDAY</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/weekofyear.php">WEEKOFYEAR</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/year.php">YEAR</a>
        <a class="nav-link py-1" href="/IT223-task3/pages/date/yearweek.php">YEARWEEK</a>
    </div>


      <a class="nav-link d-flex justify-content-between align-items-center"
         data-bs-toggle="collapse" href="#advancedFunctions" role="button"
         aria-expanded="false" aria-controls="advancedFunctions">
        <span><i class="bi bi-gear me-2"></i>MySQL Advanced Functions</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
        <div class="collapse ps-3" id="advancedFunctions" data-bs-parent="#sidebar">
            <a class="nav-link py-1" href="bin.php">BIN</a>
            <a class="nav-link py-1" href="binary.php">BINARY</a>
            <a class="nav-link py-1" href="case.php">CASE</a>
            <a class="nav-link py-1" href="cast.php">CAST</a>
            <a class="nav-link py-1" href="coalesce.php">COALESCE</a>
            <a class="nav-link py-1" href="connection_id.php">CONNECTION_ID</a>
            <a class="nav-link py-1" href="conv.php">CONV</a>
            <a class="nav-link py-1" href="convert.php">CONVERT</a>
            <a class="nav-link py-1" href="current_user.php">CURRENT_USER</a>
            <a class="nav-link py-1" href="database.php">DATABASE</a>
            <a class="nav-link py-1" href="if.php">IF</a>
            <a class="nav-link py-1" href="ifnull.php">IFNULL</a>
            <a class="nav-link py-1" href="isnull.php">ISNULL</a>
            <a class="nav-link py-1" href="last_insert_id.php">LAST_INSERT_ID</a>
            <a class="nav-link py-1" href="nullif.php">NULLIF</a>
            <a class="nav-link py-1" href="session_user.php">SESSION_USER</a>
            <a class="nav-link py-1" href="system_user.php">SYSTEM_USER</a>
            <a class="nav-link py-1" href="user.php">USER</a>
            <a class="nav-link py-1" href="version.php">VERSION</a>
        </div>

    </nav>
  </aside>

  <div class="page-content">
  </div>

</body>
</html>
