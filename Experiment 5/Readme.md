Experiment 5: Network Traffic Inspection
Objective
To analyze network packets in real-time to identify unencrypted sensitive data and evaluate the risks of Man-in-the-Middle (MitM) attacks on insecure protocols.

 Step 1: Traffic Capture
Launch Wireshark and select the active network interface (e.g., Ethernet or Wi-Fi).

Use Capture Filters (like tcp port 80) to isolate traffic between the local machine and the test server.

 Step 2: Protocol Analysis
Execute a login attempt on an insecure (HTTP) version of the Credentials Lab.

Filter: Type http.request.method == "POST" in the Wireshark display filter to locate the authentication packet.

Deep Dive: Right-click the packet and select "Follow -> TCP Stream" to view the raw data exchange.

 Step 3: Vulnerability Identification
Finding: Observe that the username and password fields are visible in Plain Text within the HTML Form URL Encoded payload.

Risk: Any intermediary node (public Wi-Fi router, malicious ISP) can intercept these credentials without a decryption key.
