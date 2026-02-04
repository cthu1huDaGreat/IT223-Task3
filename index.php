<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>SQL Functions</title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
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
        <a class="nav-link py-1">ASCII</a>
        <a class="nav-link py-1">CHAR_LENGTH</a>
        <a class="nav-link py-1">CHARACTER_LENGTH</a>
        <a class="nav-link py-1">CONCAT</a>
        <a class="nav-link py-1">CONCAT_WS</a>
        <a class="nav-link py-1">FIELD</a>
        <a class="nav-link py-1">FIND_IN_SET</a>
        <a class="nav-link py-1">FORMAT</a>
        <a class="nav-link py-1">INSERT</a>
        <a class="nav-link py-1">INSTR</a>
        <a class="nav-link py-1">LCASE</a>
        <a class="nav-link py-1">LEFT</a>
        <a class="nav-link py-1">LENGTH</a>
        <a class="nav-link py-1">LOCATE</a>
        <a class="nav-link py-1">LOWER</a>
        <a class="nav-link py-1">LPAD</a>
        <a class="nav-link py-1">LTRIM</a>
        <a class="nav-link py-1">MID</a>
        <a class="nav-link py-1">POSITION</a>
        <a class="nav-link py-1">REPEAT</a>
        <a class="nav-link py-1">REPLACE</a>
        <a class="nav-link py-1">REVERSE</a>
        <a class="nav-link py-1">RIGHT</a>
        <a class="nav-link py-1">RPAD</a>
        <a class="nav-link py-1">RTRIM</a>
        <a class="nav-link py-1">SPACE</a>
        <a class="nav-link py-1">STRCMP</a>
        <a class="nav-link py-1">SUBSTR</a>
        <a class="nav-link py-1">SUBSTRING</a>
        <a class="nav-link py-1">SUBSTRING_INDEX</a>
        <a class="nav-link py-1">TRIM</a>
        <a class="nav-link py-1">UCASE</a>
        <a class="nav-link py-1">UPPER</a>
      </div>

      <a class="nav-link d-flex justify-content-between align-items-center"
         data-bs-toggle="collapse" href="#numericFunctions" role="button"
         aria-expanded="false" aria-controls="numericFunctions">
        <span><i class="bi bi-calculator me-2"></i>MySQL Numeric Functions</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
      <div class="collapse ps-3" id="numericFunctions" data-bs-parent="#sidebar">
        <a class="nav-link py-1">ABS</a>
        <a class="nav-link py-1">ACOS</a>
        <a class="nav-link py-1">ASIN</a>
        <a class="nav-link py-1">ATAN</a>
        <a class="nav-link py-1">ATAN2</a>
        <a class="nav-link py-1">AVG</a>
        <a class="nav-link py-1">CEIL</a>
        <a class="nav-link py-1">CEILING</a>
        <a class="nav-link py-1">COS</a>
        <a class="nav-link py-1">COT</a>
        <a class="nav-link py-1">COUNT</a>
        <a class="nav-link py-1">DEGREES</a>
        <a class="nav-link py-1">DIV</a>
        <a class="nav-link py-1">EXP</a>
        <a class="nav-link py-1">FLOOR</a>
        <a class="nav-link py-1">GREATEST</a>
        <a class="nav-link py-1">LEAST</a>
        <a class="nav-link py-1">LN</a>
        <a class="nav-link py-1">LOG</a>
        <a class="nav-link py-1">LOG10</a>
        <a class="nav-link py-1">LOG2</a>
        <a class="nav-link py-1">MAX</a>
        <a class="nav-link py-1">MIN</a>
        <a class="nav-link py-1">MOD</a>
        <a class="nav-link py-1">PI</a>
        <a class="nav-link py-1">POW</a>
        <a class="nav-link py-1">POWER</a>
        <a class="nav-link py-1">RADIANS</a>
        <a class="nav-link py-1">RAND</a>
        <a class="nav-link py-1">ROUND</a>
        <a class="nav-link py-1">SIGN</a>
        <a class="nav-link py-1">SIN</a>
        <a class="nav-link py-1">SQRT</a>
        <a class="nav-link py-1">SUM</a>
        <a class="nav-link py-1">TAN</a>
        <a class="nav-link py-1">TRUNCATE</a>
      </div>

      <a class="nav-link d-flex justify-content-between align-items-center"
         data-bs-toggle="collapse" href="#dateFunctions" role="button"
         aria-expanded="false" aria-controls="dateFunctions">
        <span><i class="bi bi-calendar-event me-2"></i>MySQL Date Functions</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
      <div class="collapse ps-3" id="dateFunctions" data-bs-parent="#sidebar">
        <a class="nav-link py-1">ADDDATE</a>
        <a class="nav-link py-1">ADDTIME</a>
        <a class="nav-link py-1">CURDATE</a>
        <a class="nav-link py-1">CURRENT_DATE</a>
        <a class="nav-link py-1">CURRENT_TIME</a>
        <a class="nav-link py-1">CURRENT_TIMESTAMP</a>
        <a class="nav-link py-1">CURTIME</a>
        <a class="nav-link py-1">DATE</a>
        <a class="nav-link py-1">DATEDIFF</a>
        <a class="nav-link py-1">DATE_ADD</a>
        <a class="nav-link py-1">DATE_FORMAT</a>
        <a class="nav-link py-1">DATE_SUB</a>
        <a class="nav-link py-1">DAY</a>
        <a class="nav-link py-1">DAYNAME</a>
        <a class="nav-link py-1">DAYOFMONTH</a>
        <a class="nav-link py-1">DAYOFWEEK</a>
        <a class="nav-link py-1">DAYOFYEAR</a>
        <a class="nav-link py-1">EXTRACT</a>
        <a class="nav-link py-1">FROM_DAYS</a>
        <a class="nav-link py-1">HOUR</a>
        <a class="nav-link py-1">LAST_DAY</a>
        <a class="nav-link py-1">LOCALTIME</a>
        <a class="nav-link py-1">LOCALTIMESTAMP</a>
        <a class="nav-link py-1">MAKEDATE</a>
        <a class="nav-link py-1">MAKETIME</a>
        <a class="nav-link py-1">MICROSECOND</a>
        <a class="nav-link py-1">MINUTE</a>
        <a class="nav-link py-1">MONTH</a>
        <a class="nav-link py-1">MONTHNAME</a>
        <a class="nav-link py-1">NOW</a>
        <a class="nav-link py-1">PERIOD_ADD</a>
        <a class="nav-link py-1">PERIOD_DIFF</a>
        <a class="nav-link py-1">QUARTER</a>
        <a class="nav-link py-1">SECOND</a>
        <a class="nav-link py-1">SEC_TO_TIME</a>
        <a class="nav-link py-1">STR_TO_DATE</a>
        <a class="nav-link py-1">SUBDATE</a>
        <a class="nav-link py-1">SUBTIME</a>
        <a class="nav-link py-1">SYSDATE</a>
        <a class="nav-link py-1">TIME</a>
        <a class="nav-link py-1">TIME_FORMAT</a>
        <a class="nav-link py-1">TIME_TO_SEC</a>
        <a class="nav-link py-1">TIMEDIFF</a>
        <a class="nav-link py-1">TIMESTAMP</a>
        <a class="nav-link py-1">TO_DAYS</a>
        <a class="nav-link py-1">WEEK</a>
        <a class="nav-link py-1">WEEKDAY</a>
        <a class="nav-link py-1">WEEKOFYEAR</a>
        <a class="nav-link py-1">YEAR</a>
        <a class="nav-link py-1">YEARWEEK</a>
      </div>

      <a class="nav-link d-flex justify-content-between align-items-center"
         data-bs-toggle="collapse" href="#advancedFunctions" role="button"
         aria-expanded="false" aria-controls="advancedFunctions">
        <span><i class="bi bi-gear me-2"></i>MySQL Advanced Functions</span>
        <i class="bi bi-chevron-down small"></i>
      </a>
      <div class="collapse ps-3" id="advancedFunctions" data-bs-parent="#sidebar">
        <a class="nav-link py-1">BIN</a>
        <a class="nav-link py-1">BINARY</a>
        <a class="nav-link py-1">CASE</a>
        <a class="nav-link py-1">CAST</a>
        <a class="nav-link py-1">COALESCE</a>
        <a class="nav-link py-1">CONNECTION_ID</a>
        <a class="nav-link py-1">CONV</a>
        <a class="nav-link py-1">CONVERT</a>
        <a class="nav-link py-1">CURRENT_USER</a>
        <a class="nav-link py-1">DATABASE</a>
        <a class="nav-link py-1">IF</a>
        <a class="nav-link py-1">IFNULL</a>
        <a class="nav-link py-1">ISNULL</a>
        <a class="nav-link py-1">LAST_INSERT_ID</a>
        <a class="nav-link py-1">NULLIF</a>
        <a class="nav-link py-1">SESSION_USER</a>
        <a class="nav-link py-1">SYSTEM_USER</a>
        <a class="nav-link py-1">USER</a>
        <a class="nav-link py-1">VERSION</a>
      </div>

    </nav>
  </aside>

  <div class="page-content">
  </div>

</body>
</html>
