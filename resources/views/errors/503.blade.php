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
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #fff;
            color: #5f6368;
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
        
        .error-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 40px;
            position: relative;
        }
        
        .error-icon svg {
            width: 100%;
            height: 100%;
        }
        
        .error-title {
            font-size: 28px;
            font-weight: 400;
            color: #202124;
            margin-bottom: 16px;
            line-height: 1.2;
        }
        
        .error-message {
            font-size: 14px;
            color: #5f6368;
            margin-bottom: 32px;
            line-height: 1.5;
        }
        
        .error-code {
            font-size: 12px;
            color: #9aa0a6;
            margin-top: 24px;
        }
        
        .error-code strong {
            color: #5f6368;
        }
        
        .retry-button {
            display: inline-block;
            background-color: #1a73e8;
            color: #fff;
            padding: 10px 24px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            margin-top: 16px;
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
                font-size: 22px;
            }
            
            .error-icon {
                width: 80px;
                height: 80px;
                margin-bottom: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-icon">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <circle cx="100" cy="100" r="80" fill="none" stroke="#dadce0" stroke-width="2"/>
                <path d="M 100 60 L 100 100 M 100 120 L 100 140" stroke="#5f6368" stroke-width="3" stroke-linecap="round"/>
                <circle cx="100" cy="100" r="8" fill="#5f6368"/>
            </svg>
        </div>
        
        <h1 class="error-title">DNS address could not be found</h1>
        
        <p class="error-message">
            The server at <strong id="hostname">{{ request()->getHost() }}</strong> can't be found, because the DNS lookup failed.
        </p>
        
        <button class="retry-button" onclick="window.location.reload()">Reload</button>
        
        <div class="error-code">
            <strong>Error code:</strong> DNS_PROBE_FINISHED_NXDOMAIN
        </div>
    </div>
    
    <script>
        // Update hostname dynamically
        document.getElementById('hostname').textContent = window.location.hostname || '{{ request()->getHost() }}';
    </script>
</body>
</html>
