<?php

declare(strict_types=1);

namespace HeadFirstDesignPatterns\Observer;

interface SubjectInterface
{
    /**
     * @param ObserverInterface $observer
     *
     * @return void
     */
    public function registerObserver(ObserverInterface $observer): void;

    /**
     * @param ObserverInterface $observer
     *
     * @return void
     */
    public function removeObserver(ObserverInterface $observer): void;

    /**
     * @return void
     */
    public function notifyObservers(): void;
}
