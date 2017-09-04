<?php

namespace Drupal\commerce_invoice\Controller;

/**
 * Controller routines for Commerce Invoice
 */
class CommerceInvoiceController {
  public function selectInvoicePage($commerce_order) {
    $build = [];
    $build['#title'] = 'Invoice ' . $commerce_order;

    $build['#markup'] = '<p>TODO: add invoice page</p>';

    return $build;
  }

  public function emailInvoicePage($commerce_order) {
    $build = [];

    $build['#markup'] = '<p>TODO: add invoice email page</p>';

    return $build;
  }

  public function pdfInvoicePage($commerce_order) {
    $build = [];

    $build['#markup'] = '<p>TODO: add invoice pdf page</p>';

    return $build;
  }
}