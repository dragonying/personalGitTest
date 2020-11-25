#!/bin/bash
#alias
git config alias.lg "log --graph"
git config alias.fuck  "add ." 


#power
#no ignore
git config  core.fileMode true 
#ignore
git config  core.fileMode false
#ignore whitespace
git config --global apply.whitespace nowarn