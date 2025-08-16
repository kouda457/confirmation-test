#!/bin/bash
# ==========================================
# Git 状態一括確認スクリプト
# 作業ディレクトリ / ステージング / ローカル / リモートの差分をまとめて表示
# ==========================================

echo "===== 現在のブランチ ====="
git branch --show-current
echo

echo "===== 作業ディレクトリ（未ステージ） ====="
git diff --name-status
echo

echo "===== ステージングエリア（未コミット） ====="
git diff --cached --name-status
echo

echo "===== ローカルにあってリモートにないファイル（未push） ====="
git fetch
git log origin/$(git branch --show-current)..HEAD --oneline --stat
echo

echo "===== リモートにあってローカルにないファイル（未pull） ====="
git log HEAD..origin/$(git branch --show-current) --oneline --stat
echo

echo "===== 最新のローカルコミット ====="
git log -1 --stat