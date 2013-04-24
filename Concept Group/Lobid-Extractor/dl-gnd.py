#!/usr/bin/python

import urllib2
import os.path


f = open('out.txt','r')
errors = open('errors.txt','w')

for line in f.readlines():
        filename = line.split('/')[-1]
        if not (os.path.isfile('out/'+filename[:-1])):
                try:
                        r = urllib2.urlopen(line)
                        rdf = r.read()
                        out_file = open('out/'+filename[:-1],'w')
                        out_file.write(rdf)
                        out_file.close()
                        #print 'done loading '+filename[:-1]
                except urllib2.HTTPError, e:                        
                        errors.write(line)
                        print 'error '+e
                
        #else:
                #print 'exists'
