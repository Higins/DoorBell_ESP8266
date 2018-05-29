{\rtf1\ansi\ansicpg1250\cocoartf1561\cocoasubrtf400
{\fonttbl\f0\fmodern\fcharset0 Courier-Bold;\f1\fmodern\fcharset0 Courier;\f2\fswiss\fcharset0 Helvetica;
}
{\colortbl;\red255\green255\blue255;\red80\green53\blue137;\red251\green251\blue251;\red86\green86\blue86;
\red0\green0\blue0;\red6\green73\blue255;\red240\green240\blue240;\red0\green0\blue135;\red53\green47\blue152;
\red0\green0\blue177;\red107\green0\blue109;\red251\green0\blue7;\red253\green136\blue140;\red87\green96\blue99;
\red245\green245\blue245;\red15\green104\blue146;\red12\green94\blue157;\red0\green0\blue255;}
{\*\expandedcolortbl;;\cssrgb\c39216\c29020\c60784;\cssrgb\c98824\c98824\c98824;\cssrgb\c41176\c41176\c41176;
\cssrgb\c0\c0\c0;\cssrgb\c0\c40000\c100000;\cssrgb\c95294\c95294\c95294;\cssrgb\c0\c0\c60000;\cssrgb\c27059\c27059\c66275;
\cssrgb\c0\c0\c74902;\cssrgb\c50196\c0\c50196;\cssrgb\c100000\c0\c0;\cssrgb\c100000\c61569\c61569\c20000;\cssrgb\c41569\c45098\c46275;
\cssrgb\c96863\c96863\c96863;\cssrgb\c1961\c48627\c63922;\cssrgb\c0\c45098\c67843;\cssrgb\c0\c0\c100000;}
\paperw11900\paperh16840\margl1440\margr1440\vieww28300\viewh16300\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\b\fs28 \cf2 \cb3 \expnd0\expndtw0\kerning0
<?php
\f1\b0 \cf4 \
\pard\pardeftab720\partightenfactor0

\f0\b \cf6 \cb7 function
\f1\b0 \cf4  
\f0\b \cf8 sendMessage
\f1\b0 \cf4 ()\{\
\pard\pardeftab720\partightenfactor0
\cf4 \cb3     \cf9 $content\cf4  \cf10 =\cf4  \cf11 array\cf4 (\
\pard\pardeftab720\partightenfactor0
\cf4 \cb7                      \cf12 \cb13 "en"\cf4 \cb7  \cf10 =>\cf4  \cf12 \cb13 \'93Ring ring!\'93\cf10 \cb7 ,\cf4 \cb3 \
\cb7                      )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7     \cf9 $fields\cf4  \cf10 =\cf4  \cf11 array\cf4 (\
\pard\pardeftab720\partightenfactor0
\cf4 \cb3                     \cf12 \cb13 'app_id'\cf4 \cb3  \cf10 =>\cf4  \cf12 \cb13 \'93
\f2\b\fs26 \cf14 \cb15 ONESIGNAL APP ID
\f1\b0\fs28 \cf12 \cb13 \'93\cf10 \cb3 ,\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7                     \cf12 \cb13 'included_segments'\cf4 \cb7  \cf10 =>\cf4  \cf11 array\cf4 (\cf12 \cb13 'All'\cf4 \cb7 )\cf10 ,\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3                     \cf12 \cb13 'data'\cf4 \cb3  \cf10 =>\cf4  \cf11 array\cf4 (\cf12 \cb13 "foo"\cf4 \cb3  \cf10 =>\cf4  \cf12 \cb13 "bar"\cf4 \cb3 )\cf10 ,\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7                     \cf12 \cb13 'contents'\cf4 \cb7  \cf10 =>\cf4  \cf9 $content\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3                     )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3     \cf9 $fields\cf4  \cf10 =\cf4  \cf11 json_encode\cf4 (\cf9 $fields\cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7     \cf11 print\cf4 (\cf12 \cb13 "\cf16 \\n\cf12 JSON sent:\cf16 \\n\cf12 "\cf4 \cb7 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3     \cf11 print\cf4 (\cf9 $fields\cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3     \cf9 $ch\cf4  \cf10 =\cf4  \cf11 curl_init\cf4 ()\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7     \cf11 curl_setopt\cf4 (\cf9 $ch\cf10 ,\cf4  
\f0\b \cf17 CURLOPT_URL
\f1\b0 \cf10 ,\cf4  \cf12 \cb13 "{\field{\*\fldinst{HYPERLINK "https://onesignal.com/api/v1/notifications"}}{\fldrslt \cf18 \ul \ulc18 https://onesignal.com/api/v1/notifications}}"\cf4 \cb7 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3     \cf11 curl_setopt\cf4 (\cf9 $ch\cf10 ,\cf4  
\f0\b \cf17 CURLOPT_HTTPHEADER
\f1\b0 \cf10 ,\cf4  \cf11 array\cf4 (\cf12 \cb13 'Content-Type: application/json; charset=utf-8'\cf10 \cb3 ,\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7                                                \cf12 \cb13 'Authorization: Basic 
\f2\b\fs26 \cf14 \cb15 REST API KEY
\f1\b0\fs28 \cf12 \cb13 '\cf4 \cb7 ))\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3     \cf11 curl_setopt\cf4 (\cf9 $ch\cf10 ,\cf4  
\f0\b \cf17 CURLOPT_RETURNTRANSFER
\f1\b0 \cf10 ,\cf4  
\f0\b \cf6 TRUE
\f1\b0 \cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7     \cf11 curl_setopt\cf4 (\cf9 $ch\cf10 ,\cf4  
\f0\b \cf17 CURLOPT_HEADER
\f1\b0 \cf10 ,\cf4  
\f0\b \cf6 FALSE
\f1\b0 \cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3     \cf11 curl_setopt\cf4 (\cf9 $ch\cf10 ,\cf4  
\f0\b \cf17 CURLOPT_POST
\f1\b0 \cf10 ,\cf4  
\f0\b \cf6 TRUE
\f1\b0 \cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7     \cf11 curl_setopt\cf4 (\cf9 $ch\cf10 ,\cf4  
\f0\b \cf17 CURLOPT_POSTFIELDS
\f1\b0 \cf10 ,\cf4  \cf9 $fields\cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3     \cf11 curl_setopt\cf4 (\cf9 $ch\cf10 ,\cf4  
\f0\b \cf17 CURLOPT_SSL_VERIFYPEER
\f1\b0 \cf10 ,\cf4  
\f0\b \cf6 FALSE
\f1\b0 \cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3     \cf9 $response\cf4  \cf10 =\cf4  \cf11 curl_exec\cf4 (\cf9 $ch\cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7     \cf11 curl_close\cf4 (\cf9 $ch\cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7     
\f0\b \cf6 return
\f1\b0 \cf4  \cf9 $response\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb3 \}\
\pard\pardeftab720\partightenfactor0
\cf4 \cb7 \
\pard\pardeftab720\partightenfactor0
\cf9 \cb3 $response\cf4  \cf10 =\cf4  \cf11 sendMessage\cf4 ()\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf9 \cb7 $return\cf4 [\cf12 \cb13 "allresponses"\cf4 \cb7 ] \cf10 =\cf4  \cf9 $response\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf9 \cb3 $return\cf4  \cf10 =\cf4  \cf11 json_encode\cf4 ( \cf9 $return\cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf4 \cb7 \
\pard\pardeftab720\partightenfactor0
\cf11 \cb3 print\cf4 (\cf12 \cb13 "\cf16 \\n\\n\cf12 JSON received:\cf16 \\n\cf12 "\cf4 \cb3 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf11 \cb7 print\cf4 (\cf9 $return\cf4 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0
\cf11 \cb3 print\cf4 (\cf12 \cb13 "\cf16 \\n\cf12 "\cf4 \cb3 )\cf10 ;\cf4 \
\pard\pardeftab720\partightenfactor0

\f0\b \cf2 \cb7 ?>
\f1\b0 \cf4 		}