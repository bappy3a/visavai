<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNS address could not be found</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .error-container {
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        
        .error-title {
            font-size: 28px;
            font-weight: 500;
            color: #fff;
            margin-bottom: 20px;
        }
        
        .error-message {
            font-size: 16px;
            color: #e0e0e0;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .error-message strong {
            color: #fff;
            font-weight: 600;
        }
        
        .error-info {
            background-color: #1a1a1a;
            border: 1px solid #333;
            border-radius: 8px;
            padding: 20px;
            margin: 30px 0;
            text-align: left;
        }
        
        .error-info-item {
            font-size: 14px;
            color: #d0d0d0;
            margin-bottom: 10px;
        }
        
        .error-info-item:last-child {
            margin-bottom: 0;
        }
        
        .error-info-item strong {
            color: #fff;
            font-weight: 600;
            display: inline-block;
            min-width: 100px;
        }
        
        .error-codes {
            background-color: #1a1a1a;
            border: 1px solid #333;
            border-radius: 8px;
            padding: 20px;
            margin: 30px 0;
            text-align: left;
        }
        
        .error-codes-title {
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 12px;
        }
        
        .error-code-item {
            font-size: 13px;
            color: #d0d0d0;
            margin-bottom: 8px;
            font-family: 'Courier New', monospace;
        }
        
        .error-code-item:last-child {
            margin-bottom: 0;
        }
        
        .error-code-item strong {
            color: #ff6b6b;
            font-weight: 600;
        }
        
        .retry-button {
            display: inline-block;
            background-color: #1a73e8;
            color: #fff;
            padding: 12px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            margin-top: 20px;
            transition: background-color 0.2s;
            border: none;
            cursor: pointer;
        }
        
        .retry-button:hover {
            background-color: #1765cc;
        }
        
        .retry-button:active {
            background-color: #1557b0;
        }
        
        @media (max-width: 600px) {
            .error-title {
                font-size: 24px;
            }
            
            .error-message {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1 class="error-title">DNS address could not be found</h1>
        
        <p class="error-message">
            The server at <strong id="hostname">{{ request()->getHost() }}</strong> can't be found, because the DNS lookup failed.
        </p>
        
        <div class="error-info">
            <div class="error-info-item">
                <strong>Hostname:</strong> <span id="hostname-detail">{{ request()->getHost() }}</span>
            </div>
            <div class="error-info-item">
                <strong>IP Address:</strong> {{ request()->ip() }}
            </div>
            <div class="error-info-item">
                <strong>Status Code:</strong> 503 Service Unavailable
            </div>
        </div>
        
        <div class="error-codes">
            <div class="error-codes-title">Error Codes</div>
            <div class="error-code-item">
                <strong>DNS_PROBE_FINISHED_NXDOMAIN</strong> - Domain name cannot be resolved
            </div>
            <div class="error-code-item">
                <strong>ERR_NAME_NOT_RESOLVED</strong> - DNS lookup failed
            </div>
            <div class="error-code-item">
                <strong>ERR_CONNECTION_REFUSED</strong> - Server refused connection
            </div>
            <div class="error-code-item">
                <strong>ERR_TIMED_OUT</strong> - Connection timed out
            </div>
        </div>
        
    </div>
    
</body>
</html>
