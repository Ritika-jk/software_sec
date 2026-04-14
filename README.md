
# Software security lab walkthrough
A collection of Security-focused Lab Experiments covering vulnerability analysis, defensive coding, and network security.This repository serves as a hands-on laboratory for exploring the lifecycle of software vulnerabilities. By simulating real-world flaws, these experiments bridge the gap between identifying an exploit and implementing robust, "security-first" remediation.

##  Repository Overview
1. **Security Flaw Analysis**: Static analysis of C/Python code.
2. **Input-Based Attacks**: Local web app simulation for SQLi and XSS.
3. **Cryptographic Hashing**: Secure password storage using SHA-256 and Salting.
4. **Secure Code Review**: Audit of a login system.
5. **Network Traffic Inspection**: Packet analysis using Wireshark.

## 🛠️ Tech Stack & Tools
### **Core Technologies**
* **Languages:** `C`, `Python` (Security Scripting)
* **Web Security:** `HTML5`, `CSS3`, `JavaScript` (DOM-based XSS)
* **Database:** `SQLite` / `MySQL` (SQL Injection testing)

### **Security & Analysis Tools**
* **Network Analysis:** `Wireshark` (Packet Inspection & Protocol Analysis)
* **Vulnerability Scanning:** `Bandit` (Static Analysis for Python), `Flawfinder` (C)
* **Cryptography:** `SHA-256` Hashing, Salted Password Implementations
* **Testing Environment:** `Burp Suite` (Web Vulnerability Research)

---

## 🧪 Repository Overview

1. **Security Flaw Analysis**
   * Leveraging static analysis tools to identify **memory leaks** and **buffer overflows** in C and insecure patterns in Python.

2. **Input-Based Attacks**
   * Simulating **SQLi** and **XSS** within a local environment to understand and block injection-based vectors.

3. **Cryptographic Hashing**
   * Implementing **secure-by-design** password storage using **SHA-256 and Salting** to prevent rainbow table attacks.

4. **Secure Code Review**
   * A manual and automated audit of a **Login System** to identify logic flaws and authentication bypasses.

5. **Network Traffic Inspection**
   * Deep-packet analysis using **Wireshark** to detect unencrypted data transmission and potential **Man-in-the-Middle (MitM)** risks.
