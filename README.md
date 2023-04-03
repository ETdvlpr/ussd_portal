"MSISDN" => "+251********" ; phone number sending the request

"SESSION_ID" => "355562002" ; Session identifying the exchange

"USSD_STRING" => "111*2*3" ; The string that contains the requests sent from the USSD gateway, basically it is the answers the user gives when prompted on the phone.

after extracting to localhost/ussd/
try

http://localhost/ussd/?MSISDN=0713038301&USSD_STRING=&serviceCode=*111#

http://localhost/ussd/?MSISDN=0713038301&USSD_STRING=&serviceCode=*111*1#

http://localhost/ussd/?MSISDN=0713038301&USSD_STRING=&serviceCode=*111*1*Dawit#

http://localhost/ussd/?MSISDN=0713038301&USSD_STRING=&serviceCode=*111*2#

http://localhost/ussd/?MSISDN=0713038301&USSD_STRING=&serviceCode=*111*2*0000#

http://localhost/ussd/?MSISDN=0713038301&USSD_STRING=&serviceCode=*111*2*1234#

**assuming ussd code to be *111#  **

extras

CON keyword is used when implying a the request continues.

END signifies that the session is ended.
