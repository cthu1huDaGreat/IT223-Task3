<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>SQL Functions</title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../../style.css" rel="stylesheet">
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
  <a class="nav-link py-1" href="../string/ascii.php">ASCII</a>
  <a class="nav-link py-1" href="../string/char_length.php">CHAR_LENGTH</a>
  <a class="nav-link py-1" href="../string/character_length.php">CHARACTER_LENGTH</a>
  <a class="nav-link py-1" href="../string/concat.php">CONCAT</a>
  <a class="nav-link py-1" href="../string/concat_ws.php">CONCAT_WS</a>
  <a class="nav-link py-1" href="../string/field.php">FIELD</a>
  <a class="nav-link py-1" href="../string/find_in_set.php">FIND_IN_SET</a>
  <a class="nav-link py-1" href="../string/format.php">FORMAT</a>
  <a class="nav-link py-1" href="../string/insert.php">INSERT</a>
  <a class="nav-link py-1" href="../string/instr.php">INSTR</a>
  <a class="nav-link py-1" href="../string/lcase.php">LCASE</a>
  <a class="nav-link py-1" href="../string/left.php">LEFT</a>
  <a class="nav-link py-1" href="../string/length.php">LENGTH</a>
  <a class="nav-link py-1" href="../string/locate.php">LOCATE</a>
  <a class="nav-link py-1" href="../string/lower.php">LOWER</a>
  <a class="nav-link py-1" href="../string/lpad.php">LPAD</a>
  <a class="nav-link py-1" href="../string/ltrim.php">LTRIM</a>
  <a class="nav-link py-1" href="../string/mid.php">MID</a>
  <a class="nav-link py-1" href="../string/position.php">POSITION</a>
  <a class="nav-link py-1" href="../string/repeat.php">REPEAT</a>
  <a class="nav-link py-1" href="../string/replace.php">REPLACE</a>
  <a class="nav-link py-1" href="../string/reverse.php">REVERSE</a>
  <a class="nav-link py-1" href="../string/right.php">RIGHT</a>
  <a class="nav-link py-1" href="../string/rpad.php">RPAD</a>
  <a class="nav-link py-1" href="../string/rtrim.php">RTRIM</a>
  <a class="nav-link py-1" href="../string/space.php">SPACE</a>
  <a class="nav-link py-1" href="../string/strcmp.php">STRCMP</a>
  <a class="nav-link py-1" href="../string/substr.php">SUBSTR</a>
  <a class="nav-link py-1" href="../string/substring.php">SUBSTRING</a>
  <a class="nav-link py-1" href="../string/substring_index.php">SUBSTRING_INDEX</a>
  <a class="nav-link py-1" href="../string/trim.php">TRIM</a>
  <a class="nav-link py-1" href="../string/ucase.php">UCASE</a>
  <a class="nav-link py-1" href="../string/upper.php">UPPER</a>
</div>


      <a class="nav-link d-flex justify-content-between align-items-center"
         data-bs-toggle="collapse" href="#numericFunctions" role="button"
         aria-expanded="false" aria-controls="numericFunctions">
        <span><i class="bi bi-calculator me-2"></i>MySQL Numeric Functions</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
      <div class="collapse ps-3" id="numericFunctions" data-bs-parent="#sidebar">
        <a class="nav-link py-1" href="../numeric/abs.php">ABS</a>
        <a class="nav-link py-1" href="../numeric/acos.php">ACOS</a>
        <a class="nav-link py-1" href="../numeric/asin.php">ASIN</a>
        <a class="nav-link py-1" href="../numeric/atan.php">ATAN</a>
        <a class="nav-link py-1" href="../numeric/atan2.php">ATAN2</a>
        <a class="nav-link py-1" href="../numeric/avg.php">AVG</a>
        <a class="nav-link py-1" href="../numeric/ceil.php">CEIL</a>
        <a class="nav-link py-1" href="../numeric/ceiling.php">CEILING</a>
        <a class="nav-link py-1" href="../numeric/cos.php">COS</a>
        <a class="nav-link py-1" href="../numeric/cot.php">COT</a>
        <a class="nav-link py-1" href="../numeric/count.php">COUNT</a>
        <a class="nav-link py-1" href="../numeric/degrees.php">DEGREES</a>
        <a class="nav-link py-1" href="../numeric/div.php">DIV</a>
        <a class="nav-link py-1" href="../numeric/exp.php">EXP</a>
        <a class="nav-link py-1" href="../numeric/floor.php">FLOOR</a>
        <a class="nav-link py-1" href="../numeric/greatest.php">GREATEST</a>
        <a class="nav-link py-1" href="../numeric/least.php">LEAST</a>
        <a class="nav-link py-1" href="../numeric/ln.php">LN</a>
        <a class="nav-link py-1" href="../numeric/log.php">LOG</a>
        <a class="nav-link py-1" href="../numeric/log10.php">LOG10</a>
        <a class="nav-link py-1" href="../numeric/log2.php">LOG2</a>
        <a class="nav-link py-1" href="../numeric/max.php">MAX</a>
        <a class="nav-link py-1" href="../numeric/min.php">MIN</a>
        <a class="nav-link py-1" href="../numeric/mod.php">MOD</a>
        <a class="nav-link py-1" href="../numeric/pi.php">PI</a>
        <a class="nav-link py-1" href="../numeric/pow.php">POW</a>
        <a class="nav-link py-1" href="../numeric/power.php">POWER</a>
        <a class="nav-link py-1" href="../numeric/radians.php">RADIANS</a>
        <a class="nav-link py-1" href="../numeric/rand.php">RAND</a>
        <a class="nav-link py-1" href="../numeric/round.php">ROUND</a>
        <a class="nav-link py-1" href="../numeric/sign.php">SIGN</a>
        <a class="nav-link py-1" href="../numeric/sin.php">SIN</a>
        <a class="nav-link py-1" href="../numeric/sqrt.php">SQRT</a>
        <a class="nav-link py-1" href="../numeric/sum.php">SUM</a>
        <a class="nav-link py-1" href="../numeric/tan.php">TAN</a>
        <a class="nav-link py-1" href="../numeric/truncate.php">TRUNCATE</a>
    </div>


      <a class="nav-link d-flex justify-content-between align-items-center"
         data-bs-toggle="collapse" href="#dateFunctions" role="button"
         aria-expanded="false" aria-controls="dateFunctions">
        <span><i class="bi bi-calendar-event me-2"></i>MySQL Date Functions</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
     <div class="collapse ps-3" id="dateFunctions" data-bs-parent="#sidebar">
        <a class="nav-link py-1" href="../date/adddate.php">ADDDATE</a>
        <a class="nav-link py-1" href="../date/addtime.php">ADDTIME</a>
        <a class="nav-link py-1" href="../date/curdate.php">CURDATE</a>
        <a class="nav-link py-1" href="../date/current_date.php">CURRENT_DATE</a>
        <a class="nav-link py-1" href="../date/current_time.php">CURRENT_TIME</a>
        <a class="nav-link py-1" href="../date/current_timestamp.php">CURRENT_TIMESTAMP</a>
        <a class="nav-link py-1" href="../date/curtime.php">CURTIME</a>
        <a class="nav-link py-1" href="../date/date.php">DATE</a>
        <a class="nav-link py-1" href="../date/datediff.php">DATEDIFF</a>
        <a class="nav-link py-1" href="../date/date_add.php">DATE_ADD</a>
        <a class="nav-link py-1" href="../date/date_format.php">DATE_FORMAT</a>
        <a class="nav-link py-1" href="../date/date_sub.php">DATE_SUB</a>
        <a class="nav-link py-1" href="../date/day.php">DAY</a>
        <a class="nav-link py-1" href="../date/dayname.php">DAYNAME</a>
        <a class="nav-link py-1" href="../date/dayofmonth.php">DAYOFMONTH</a>
        <a class="nav-link py-1" href="../date/dayofweek.php">DAYOFWEEK</a>
        <a class="nav-link py-1" href="../date/dayofyear.php">DAYOFYEAR</a>
        <a class="nav-link py-1" href="../date/extract.php">EXTRACT</a>
        <a class="nav-link py-1" href="../date/from_days.php">FROM_DAYS</a>
        <a class="nav-link py-1" href="../date/hour.php">HOUR</a>
        <a class="nav-link py-1" href="../date/last_day.php">LAST_DAY</a>
        <a class="nav-link py-1" href="../date/localtime.php">LOCALTIME</a>
        <a class="nav-link py-1" href="../date/localtimestamp.php">LOCALTIMESTAMP</a>
        <a class="nav-link py-1" href="../date/makedate.php">MAKEDATE</a>
        <a class="nav-link py-1" href="../date/maketime.php">MAKETIME</a>
        <a class="nav-link py-1" href="../date/microsecond.php">MICROSECOND</a>
        <a class="nav-link py-1" href="../date/minute.php">MINUTE</a>
        <a class="nav-link py-1" href="../date/month.php">MONTH</a>
        <a class="nav-link py-1" href="../date/monthname.php">MONTHNAME</a>
        <a class="nav-link py-1" href="../date/now.php">NOW</a>
        <a class="nav-link py-1" href="../date/period_add.php">PERIOD_ADD</a>
        <a class="nav-link py-1" href="../date/period_diff.php">PERIOD_DIFF</a>
        <a class="nav-link py-1" href="../date/quarter.php">QUARTER</a>
        <a class="nav-link py-1" href="../date/second.php">SECOND</a>
        <a class="nav-link py-1" href="../date/sec_to_time.php">SEC_TO_TIME</a>
        <a class="nav-link py-1" href="../date/str_to_date.php">STR_TO_DATE</a>
        <a class="nav-link py-1" href="../date/subdate.php">SUBDATE</a>
        <a class="nav-link py-1" href="../date/subtime.php">SUBTIME</a>
        <a class="nav-link py-1" href="../date/sysdate.php">SYSDATE</a>
        <a class="nav-link py-1" href="../date/time.php">TIME</a>
        <a class="nav-link py-1" href="../date/time_format.php">TIME_FORMAT</a>
        <a class="nav-link py-1" href="../date/time_to_sec.php">TIME_TO_SEC</a>
        <a class="nav-link py-1" href="../date/timediff.php">TIMEDIFF</a>
        <a class="nav-link py-1" href="../date/timestamp.php">TIMESTAMP</a>
        <a class="nav-link py-1" href="../date/to_days.php">TO_DAYS</a>
        <a class="nav-link py-1" href="../date/week.php">WEEK</a>
        <a class="nav-link py-1" href="../date/weekday.php">WEEKDAY</a>
        <a class="nav-link py-1" href="../date/weekofyear.php">WEEKOFYEAR</a>
        <a class="nav-link py-1" href="../date/year.php">YEAR</a>
        <a class="nav-link py-1" href="../date/yearweek.php">YEARWEEK</a>
    </div>


      <a class="nav-link d-flex justify-content-between align-items-center"
         data-bs-toggle="collapse" href="#advancedFunctions" role="button"
         aria-expanded="false" aria-controls="advancedFunctions">
        <span><i class="bi bi-gear me-2"></i>MySQL Advanced Functions</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
        <div class="collapse ps-3" id="advancedFunctions" data-bs-parent="#sidebar">
            <a class="nav-link py-1" href="../advanced/bin.php">BIN</a>
            <a class="nav-link py-1" href="../advanced/binary.php">BINARY</a>
            <a class="nav-link py-1" href="../advanced/case.php">CASE</a>
            <a class="nav-link py-1" href="../advanced/cast.php">CAST</a>
            <a class="nav-link py-1" href="../advanced/coalesce.php">COALESCE</a>
            <a class="nav-link py-1" href="../advanced/connection_id.php">CONNECTION_ID</a>
            <a class="nav-link py-1" href="../advanced/conv.php">CONV</a>
            <a class="nav-link py-1" href="../advanced/convert.php">CONVERT</a>
            <a class="nav-link py-1" href="../advanced/current_user.php">CURRENT_USER</a>
            <a class="nav-link py-1" href="../advanced/database.php">DATABASE</a>
            <a class="nav-link py-1" href="../advanced/if.php">IF</a>
            <a class="nav-link py-1" href="../advanced/ifnull.php">IFNULL</a>
            <a class="nav-link py-1" href="../advanced/isnull.php">ISNULL</a>
            <a class="nav-link py-1" href="../advanced/last_insert_id.php">LAST_INSERT_ID</a>
            <a class="nav-link py-1" href="../advanced/nullif.php">NULLIF</a>
            <a class="nav-link py-1" href="../advanced/session_user.php">SESSION_USER</a>
            <a class="nav-link py-1" href="../advanced/system_user.php">SYSTEM_USER</a>
            <a class="nav-link py-1" href="../advanced/user.php">USER</a>
            <a class="nav-link py-1" href="../advanced/version.php">VERSION</a>
        </div>

    </nav>
  </aside>

  <div class="page-content">
    <style>
      .page-content { background: transparent; }
      .function-card { background: rgba(6, 11, 20, 0.6); border: 1px solid rgba(0, 229, 255, 0.1); border-radius: 12px; padding: 2rem; margin-bottom: 2rem; }
      .function-card h2 { color: #0ca0b1; font-size: 1.8rem; }
      .function-card h3 { color: #7b4db8; margin-top: 1.5rem; }
      .function-card p { color: #8a9aaa; }
      .function-card code { background: rgba(0, 155, 155, 0.1); color: #0ca0b1; padding: 0.2rem 0.6rem; border-radius: 4px; font-family: Courier New; }
      .function-card pre { background: rgba(6, 11, 20, 0.9); border: 1px solid rgba(0, 229, 255, 0.08); padding: 1rem; overflow-x: auto; color: #0ca0b1; }
      .example-table { background: rgba(6, 11, 20, 0.5); border: 1px solid rgba(0, 229, 255, 0.08); border-radius: 8px; }
      .example-table thead { background: rgba(6, 11, 20, 0.8); color: #0ca0b1; }
      .example-table td { color: #7a8a99; padding: 1rem; }
    </style>
    <div class="container-fluid p-5">
      <div class="function-card">
        <h2><i class='bi bi-calendar-event me-2'></i>LN Function</h2>
        <h3>Description</h3>
        <p>The LN() function returns the natural logarithm of a number.

The specified number must be greater than 0, otherwise this function returns NULL. </p>
        <h3>Syntax</h3>
        <pre><code>LN(number)</code></pre>
        <h3>Parameter Values</h3>
        <ul style="color: #e6eef3;"><li>number: The number to be calculated natural logarithm of</li></ul>
      </div>
      <div class="function-card">
        <h3>Database Examples</h3>
        <table class="table example-table">
          <thead><tr><th>Result</th></tr></thead>
          <tbody>
            <?php include "../../config.php"; $result = $conn->query("SELECT LN(1) as result LIMIT 1"); $row = $result->fetch_assoc(); echo "<tr><td><code>" . htmlspecialchars($row["result"]) . "</code></td></tr>"; $conn->close(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

</body>
</html>



